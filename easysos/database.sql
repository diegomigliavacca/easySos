--FILE CREATES TABLE STRUCTURE OF DATABASE

-- last change: 2008-05-13
-- last change by: skuenster

-- Dropping Tables
----------------------
DROP TABLE IF EXISTS quality CASCADE;
DROP TABLE IF EXISTS phenomenon CASCADE;
DROP TABLE IF EXISTS observation CASCADE;
DROP TABLE IF EXISTS offering CASCADE;
DROP TABLE IF EXISTS phen_off CASCADE;
DROP TABLE IF EXISTS proc_phen CASCADE;
DROP TABLE IF EXISTS proc_foi CASCADE;
DROP TABLE IF EXISTS proc_df CASCADE;
DROP TABLE IF EXISTS proc_off CASCADE;
DROP TABLE IF EXISTS obs_df CASCADE;
DROP TABLE IF EXISTS foi_df CASCADE;
DROP TABLE IF EXISTS procedure CASCADE;
DROP TABLE IF EXISTS procedure_history CASCADE;
DROP TABLE IF EXISTS feature_of_interest CASCADE;
DROP TABLE IF EXISTS domain_feature CASCADE;
DROP TABLE IF EXISTS request_phenomenon CASCADE;
DROP TABLE IF EXISTS request CASCADE;
DROP TABLE IF EXISTS observation_template CASCADE;
DROP TABLE IF EXISTS composite_phenomenon CASCADE;
DROP TABLE IF EXISTS com_phen_off CASCADE;
DROP TABLE IF EXISTS foi_off CASCADE;
DROP TABLE IF EXISTS df_off CASCADE;
DROP TABLE IF EXISTS request_composite_phenomenon CASCADE;


-----------------------------------------------------------------------------------------------------------------------
-- Creating the tables
-----------------------------------------------------------------------------------------------------------------------

-----------------------------------------------------------------------------------------------------------------------
-- tables for storing observations and metadata
-----------------------------------------------------------------------------------------------------------------------
-- Table: observation
-- represents observations 
CREATE TABLE observation 
(
  time_stamp timestamptz NOT NULL,
  procedure_id varchar(100) NOT NULL,
  feature_of_interest_id varchar(100) NOT NULL,
  phenomenon_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  text_value text,
  numeric_value numeric,
  spatial_value geometry, 
  mime_type varchar(100),
  observation_id SERIAL,
  UNIQUE (time_stamp, procedure_id, feature_of_interest_id,phenomenon_id,offering_id),
  PRIMARY KEY(observation_id)
);

-- Table: quality
-- represents a quality element of an observation; must reference to an observation tuple
CREATE TABLE quality (
  quality_id SERIAL,
  quality_name varchar(100),
  quality_unit varchar(100) NOT NULL,
  quality_value text NOT NULL,
  quality_type varchar(100) NOT NULL,
  PRIMARY KEY(quality_id),
  observation_id integer REFERENCES observation(observation_id) NOT NULL,
  CHECK (quality_type IN ('quantity','category','text'))
);

-- Table: offering
-- represents offerings, which aggregate either phenomena or features of interest 
CREATE TABLE offering 
(
  offering_id varchar(100) NOT NULL,
  offering_name varchar(100),
  min_time timestamptz,
  max_time timestamptz,
  PRIMARY KEY (offering_id)
);

-- Table: feature_of_interest
-- represents the feature of interest of an observation
CREATE TABLE feature_of_interest
(
  feature_of_interest_id varchar(100) NOT NULL,
  feature_of_interest_name varchar(100) NOT NULL,
  feature_of_interest_description varchar(200),
  geom geometry NOT NULL,
  feature_type text NOT NULL,
  schema_link text,
  PRIMARY KEY (feature_of_interest_id)
);

-- Table: domain_feature
-- represents the domain features of an observation
CREATE TABLE domain_feature
(
  domain_feature_id varchar(100) NOT NULL,
  domain_feature_name varchar(100) NOT NULL,
  domain_feature_description varchar(200),
  geom geometry NOT NULL,
  feature_type text NOT NULL,
  schema_link text,
  PRIMARY KEY (domain_feature_id)
);

-- Table: phenomenon
-- represents phenomena
CREATE TABLE phenomenon
(
  phenomenon_id varchar(100) NOT NULL,
  phenomenon_description varchar(200),
  unit varchar(30) NOT NULL,
  valuetype varchar(40) NOT NULL,
  composite_phenomenon_id varchar(100),
  om_application_schema_link text,
  PRIMARY KEY (phenomenon_id),
  CHECK (valuetype IN ('textType','numericType', 'spatialType', 'commonType','externalReferenceType'))
);

-- Table: composite phenomenon
-- represents composite phenomena (which are aggregations of single phenomena)
CREATE TABLE composite_phenomenon
(
  composite_phenomenon_id varchar(100) NOT NULL,
  composite_phenomenon_description varchar(100),
  PRIMARY KEY (composite_phenomenon_id)
);

-- Table: procedure
-- represents the procedure which produces the observation values
CREATE TABLE procedure
(
  procedure_id varchar(100) NOT NULL,
  description_url varchar(200),
  description_type varchar(100),
  sml_file text,
  actual_position geometry,
  active boolean,
  mobile boolean,
  PRIMARY KEY (procedure_id)
);

-- Table: procedure_history
-- represents the procedure history
CREATE TABLE procedure_history
(
  procedure_id varchar(100) NOT NULL,
  time_stamp timestamptz NOT NULL,
  position geometry,
  active boolean,
  mobile boolean,
  PRIMARY KEY (procedure_id,time_stamp)
);

--Table: phen_off
-- represents the m:n relationship between phenomena and offerings
CREATE TABLE phen_off
(
  phenomenon_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  PRIMARY KEY (phenomenon_id,offering_id)
);

--Table: foi_off
-- represents the m:n relationship between features of interest and offerings
CREATE TABLE foi_off
(
  feature_of_interest_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  PRIMARY KEY (feature_of_interest_id,offering_id)
);

--Table: df_off
-- represents the m:n relationship between domain features and offerings
CREATE TABLE df_off
(
  domain_feature_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  PRIMARY KEY (domain_feature_id,offering_id)
);

--Table: proc_off
-- represents the m:n relationship between features of interest and offerings
CREATE TABLE proc_off
(
  procedure_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  PRIMARY KEY (procedure_id,offering_id)
);

--Table: proc_df
-- represents the m:n relationship between domain features and procedures
CREATE TABLE proc_df
(
  procedure_id varchar(100) NOT NULL,
  domain_feature_id varchar(100) NOT NULL,
  PRIMARY KEY (procedure_id,domain_feature_id)
);

--Table: com_phen_off
-- represents the m:n relationship between composite phenomena and offerings
CREATE TABLE com_phen_off
(
  composite_phenomenon_id varchar(100) NOT NULL,
  offering_id varchar(100) NOT NULL,
  PRIMARY KEY (composite_phenomenon_id,offering_id)
);

-- Table: proc_phen
-- represents the m:n relationship between procedures and the phenomena the procedures measure
CREATE TABLE proc_phen
(
  procedure_id varchar(100) NOT NULL,
  phenomenon_id varchar(100) NOT NULL,
  PRIMARY KEY (procedure_id,phenomenon_id)
);

-- Table: proc_foi
-- represents the m:n relationship between procedures and feature of interests
CREATE TABLE proc_foi
(
  procedure_id varchar(100) NOT NULL,
  feature_of_interest_id varchar(100) NOT NULL,
  PRIMARY KEY (procedure_id,feature_of_interest_id)
);

-- Table: obs_df
-- represents the m:n relationship between observations and domain features
CREATE TABLE obs_df
(
  observation_id integer NOT NULL,
  domain_feature_id varchar(100) NOT NULL,
  PRIMARY KEY (observation_id,domain_feature_id)
);

-- Table: foi_df
-- represents the m:n relationship between features of interest and domain features
CREATE TABLE foi_df
(
  feature_of_interest_id varchar(100) NOT NULL,
  domain_feature_id varchar(100) NOT NULL,
  PRIMARY KEY (feature_of_interest_id,domain_feature_id)
);

-----------------------------------------------------------------------------------------------------------------------
-- tables for get result operation
-----------------------------------------------------------------------------------------------------------------------
-- Table: observation_template
-- represents the observation templates for the get result operation
CREATE TABLE observation_template
(
  obs_template_id SERIAL,	
  procedure_id varchar(100) NOT NULL,
  request_id int4 NOT NULL,
  observation_template text,
  PRIMARY KEY (obs_template_id)
);


-- Table: request_phenomenon
-- represents the m:n relationship between requests and phenomena
CREATE TABLE request_phenomenon
(
  phenomenon_id varchar(100) NOT NULL,
  request_id int4 NOT NULL
);

-- Table: request_composite_phenomenon
-- represents the m:n relationship between requests and phenomena
CREATE TABLE request_composite_phenomenon
(
  composite_phenomenon_id varchar(100) NOT NULL,
  request_id int4 NOT NULL
);

-- Table: request
-- represents the stored get result request
CREATE TABLE request
(
  request_id SERIAL,
  offering_id varchar(100) NOT NULL,
  request text NOT NULL,
  begin_lease timestamptz,
  end_lease timestamptz NOT NULL,
  PRIMARY KEY (request_id)
);

-----------------------------------------------------------------------------------------------------------------------
--add indices
-----------------------------------------------------------------------------------------------------------------------
CREATE INDEX textValueObsTable ON observation(text_value);
CREATE INDEX numericValueObsTable ON observation(numeric_value);
CREATE INDEX phenObsTable ON observation(phenomenon_id);
CREATE INDEX procObsTable ON observation(procedure_id);
CREATE INDEX foiObsTable ON observation(feature_of_interest_id);
CREATE INDEX offObsTable ON observation(offering_id);
CREATE INDEX foiGeomIndex ON feature_of_interest USING
        GIST (geom GIST_GEOMETRY_OPS); 

-----------------------------------------------------------------------------------------------------------------------
-- add references and foreign keys
-----------------------------------------------------------------------------------------------------------------------
--foreign keys for observation table
ALTER TABLE observation ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;
ALTER TABLE observation ADD FOREIGN KEY (feature_of_interest_id) REFERENCES feature_of_interest ON UPDATE CASCADE;
ALTER TABLE observation ADD FOREIGN KEY (phenomenon_id) REFERENCES phenomenon ON UPDATE CASCADE;
ALTER TABLE observation ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--foreign keys for phenomenon table
ALTER TABLE phenomenon ADD FOREIGN KEY (composite_phenomenon_id) REFERENCES composite_phenomenon ON UPDATE CASCADE;

--foreign keys for com_phen_off table
ALTER TABLE com_phen_off ADD FOREIGN KEY (composite_phenomenon_id) REFERENCES composite_phenomenon ON UPDATE CASCADE;
ALTER TABLE com_phen_off ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--foreign keys for phen_off table
ALTER TABLE phen_off ADD FOREIGN KEY (phenomenon_id) REFERENCES phenomenon ON UPDATE CASCADE;
ALTER TABLE phen_off ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--foreign keys for foi_off table
ALTER TABLE foi_off ADD FOREIGN KEY (feature_of_interest_id) REFERENCES feature_of_interest ON UPDATE CASCADE;
ALTER TABLE foi_off ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--foreign keys for df_off table
ALTER TABLE df_off ADD FOREIGN KEY (domain_feature_id) REFERENCES domain_feature ON UPDATE CASCADE;
ALTER TABLE df_off ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--foreign keys for proc_phen table
ALTER TABLE proc_phen ADD FOREIGN KEY (phenomenon_id) REFERENCES phenomenon ON UPDATE CASCADE;
ALTER TABLE proc_phen ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;

--foreign keys for proc_foi table
ALTER TABLE proc_foi ADD FOREIGN KEY (feature_of_interest_id) REFERENCES feature_of_interest ON UPDATE CASCADE;
ALTER TABLE proc_foi ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;

--foreign keys for proc_df table
ALTER TABLE proc_df ADD FOREIGN KEY (domain_feature_id) REFERENCES domain_feature ON UPDATE CASCADE;
ALTER TABLE proc_df ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;

ALTER TABLE procedure_history ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;

ALTER TABLE foi_df ADD FOREIGN KEY (feature_of_interest_id) REFERENCES feature_of_interest ON UPDATE CASCADE;
ALTER TABLE foi_df ADD FOREIGN KEY (domain_feature_id) REFERENCES domain_feature ON UPDATE CASCADE;

ALTER TABLE obs_df ADD FOREIGN KEY (observation_id) REFERENCES observation ON UPDATE CASCADE;
ALTER TABLE obs_df ADD FOREIGN KEY (domain_feature_id) REFERENCES domain_feature ON UPDATE CASCADE;

ALTER TABLE proc_off ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;
ALTER TABLE proc_off ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;

--foreign keys for observation_template table
ALTER TABLE observation_template ADD FOREIGN KEY (procedure_id) REFERENCES procedure ON UPDATE CASCADE;
ALTER TABLE observation_template ADD FOREIGN KEY (request_id) REFERENCES request ON UPDATE CASCADE ON DELETE CASCADE;

--foreign keys for request_phenomenon table
ALTER TABLE request_phenomenon ADD FOREIGN KEY (phenomenon_id) REFERENCES phenomenon ON UPDATE CASCADE;
ALTER TABLE request_phenomenon ADD FOREIGN KEY (request_id) REFERENCES request ON UPDATE CASCADE ON DELETE CASCADE;

--foreign keys for request_composite_phenomenon table
ALTER TABLE request_composite_phenomenon ADD FOREIGN KEY (composite_phenomenon_id) REFERENCES composite_phenomenon ON UPDATE CASCADE;
ALTER TABLE request_composite_phenomenon ADD FOREIGN KEY (request_id) REFERENCES request ON UPDATE CASCADE ON DELETE CASCADE;

--foreign keys for request table
ALTER TABLE request ADD FOREIGN KEY (offering_id) REFERENCES offering ON UPDATE CASCADE;

--function for getting timestamp as iso
CREATE OR REPLACE FUNCTION
 iso_timestamp(timestamp with time zone)
   RETURNS varchar as $$
  SELECT replace(replace(replace(text(xmlelement(name x, $1)),'<x>',''),'</x>',''),'<x/>','')::varchar
$$ language sql immutable;

-----------------------------------------------------------------------------------------------------------------------
-- trigger for actualization of min_time and max_time for offering, if an insert or a delete on table observation is done
-----------------------------------------------------------------------------------------------------------------------
CREATE OR REPLACE FUNCTION offering_update()
RETURNS trigger AS 
$BODY$
DECLARE
row_data offering%rowtype;
BEGIN
FOR row_data IN SELECT * FROM offering 
    LOOP
        UPDATE offering SET min_time = (SELECT min(time_stamp) FROM observation WHERE observation.offering_id= row_data.offering_id) WHERE offering.offering_id= row_data.offering_id;
        UPDATE offering SET max_time = (SELECT max(time_stamp) FROM observation WHERE observation.offering_id= row_data.offering_id) WHERE offering.offering_id= row_data.offering_id;
    END LOOP;
return new;
END
$BODY$
 LANGUAGE 'plpgsql' VOLATILE;

CREATE TRIGGER offering_actualization
  AFTER INSERT OR UPDATE OR DELETE
  ON observation
  FOR EACH STATEMENT
  EXECUTE PROCEDURE offering_update();
