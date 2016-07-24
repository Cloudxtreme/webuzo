## Movable Type Configuration File
##
## This file defines system-wide
## settings for Movable Type. In 
## total, there are over a hundred 
## options, but only those 
## critical for everyone are listed 
## below.
##
## Information on all others can be 
## found at:
##  http://www.movabletype.org/documentation/config

#======== REQUIRED SETTINGS ==========

CGIPath        [[relativeurl]]/
StaticWebPath  [[wrelativeurl]]/mt-static/
StaticFilePath [[wwwdir]]/mt-static

#======== DATABASE SETTINGS ==========

ObjectDriver DBI::mysql
Database [[softdb]]
DBUser [[softdbuser]]
DBPassword [[softdbpass]]
DBHost [[softdbhost]]

#======== MAIL =======================
EmailAddressMain [[admin_email]]
    
DefaultLanguage en-us
