#My Software Engineering case study project for Tarlac State University

#Project Name: Barangay Clearance Monitoring System for Barangay Sapang Maragul

#Other informations:
This system is built using Twitter Bootstrap.

#Installation of the database
create database sapangmaragul;  
<code> use sapangmaragul; </code>
  
CREATE TABLE users (  
    	ID int(11) NOT NULL AUTO_INCREMENT,  
    	FName varchar(50) NOT NULL,  
	    MName varchar(50) NOT NULL,  
    	LName varchar(50) NOT NULL,  
    	Age int(11) NOT NULL,  
    	Gender varchar(50) NOT NULL,  
	    Email varchar(50) NOT NULL,  
	    Cellphone varchar(50) NOT NULL,  
	    Address varchar(50) NOT NULL,  
	    Purpose varchar(50) NOT NULL,  
	    Dateadd varchar(50) NOT NULL,  
    	PRIMARY KEY (ID)  
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;  

