#!/bin/sh
mysql -u root -p <<EOF
CREATE DATABASE devices;
USE devices;
CREATE TABLE smartphones(id VARCHAR(50) PRIMARY KEY,vendor VARCHAR(50),model VARCHAR(200),flashtool VARCHAR(1024) DEFAULT NULL,blmode VARCHAR(1024) DEFAULT NULL,remotebuild VARCHAR(1024) DEFAULT NULL);
# We currently have our own builds for Nexus 6P and Samsung S5 Neo
INSERT INTO smartphones(id,vendor,model,flashtool,blmode) VALUES('angler','Google','Nexus 6P','AOSP','Volume Down + Power');
INSERT INTO smartphones(id,vendor,model,flashtool,blmode) VALUES('s5neolte','Samsung','S5 Neo','heimdall','Volume Down + Home + Power');
# Devices supported by LineageOS
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('I01WD','Asus','Zenfone 6 (ZS630KL)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('bardock','BQ','Aquaris X','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('bardockpro','BQ','Aquaris X Pro','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('mata','Essential','PH-1','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('FP2','FairPhone','FP2','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('shamu','Google','Nexus 6','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('sailfish','Google','Pixel','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('marlin','Google','Pixel XL','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('m8','HTC','One (M8)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('m8d','HTC','One (M8) Dual SIM','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('x2','LeEco','Le Max2','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('zl1','LeEco','Le Pro3','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('kuntao','Lenovo','P2','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('d802','LG','G2 (International)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('d855','LG','G3 (International)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('h850','LG','G5 (International)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('h990','LG','V20 (Global)','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('surnia','Motorola','Moto E 2015 LTE','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('osprey','Motorola','Moto G 2015','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('merlin','Motorola','Moto G3 Turbo','LineageOS');
INSERT INTO smartphones(id,vendor,model,remotebuild) VALUES('harpia','Motorola','Moto G4 Play','LineageOS');
INSERT INTO smartphones(id,vendor,model,flashtool,remotebuild) VALUES('a3xelte','Samsung','Galaxy A3','heimdall','LineageOS');
INSERT INTO smartphones(id,vendor,model,flashtool,remotebuild) VALUES('guacamole','OnePlus','7 Pro','android','LineageOS');
CREATE TABLE tablets(id VARCHAR(50) PRIMARY KEY,vendor VARCHAR(50),model VARCHAR(200),flashtool VARCHAR(1024) DEFAULT NULL,remotebuild VARCHAR(1024) DEFAULT NULL);
INSERT INTO tablets(id,vendor,model,flashtool,remotebuild) VALUES('gts28vewifi','Samsung','Galaxy Tab S2 8.0 WiFi','heimdall','LineageOS');
GRANT SELECT ON devices.* TO 'devices'@'localhost' IDENTIFIED BY 'DeviceDB';
EOF
