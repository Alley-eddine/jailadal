CREATE DATABASE IF NOT EXISTS jailadal;
USE jailadal;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Categories
#------------------------------------------------------------

CREATE TABLE `Categories`(
        cat_id   Varchar (36) NOT NULL ,
        cat_name Varchar (100) NOT NULL
	,CONSTRAINT Categories_PK PRIMARY KEY (cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Items
#------------------------------------------------------------

CREATE TABLE `Items`(
        itm_id          Varchar (36) NOT NULL ,
        itm_name        Varchar (100) NOT NULL ,
        itm_description Varchar (255) NOT NULL ,
        itm_price       Float NOT NULL ,
        itm_image       Varchar (255) NOT NULL ,
        itm_qty         Int NOT NULL ,
        itm_category    Int NOT NULL ,
        itm_sales       BigInt NOT NULL ,
        cat_id          Varchar (36) NOT NULL
	,CONSTRAINT Items_PK PRIMARY KEY (itm_id)

	,CONSTRAINT Items_Categories_FK FOREIGN KEY (cat_id) REFERENCES Categories(cat_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE `User`(
        usr_id          Varchar (36) NOT NULL ,
        usr_lastname    Varchar (50) NOT NULL ,
        usr_firstname   Varchar (100) NOT NULL ,
        usr_mail        Varchar (100) NOT NULL ,
        usr_phone       Varchar (50) NOT NULL ,
        usr_password    Varchar (100) NOT NULL ,
        usr_picture_url Varchar (100) NOT NULL ,
        usr_privilege   Boolean NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (usr_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Cart
#------------------------------------------------------------

CREATE TABLE `Cart`(
        crt_id Varchar (36) NOT NULL ,
        usr_id Varchar (36) NOT NULL
	,CONSTRAINT Cart_PK PRIMARY KEY (crt_id)

	,CONSTRAINT Cart_User_FK FOREIGN KEY (usr_id) REFERENCES User(usr_id)
	,CONSTRAINT Cart_User_AK UNIQUE (usr_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Order
#------------------------------------------------------------

CREATE TABLE `Order`(
        odr_id     Varchar (36) NOT NULL ,
        odr_status Int NOT NULL ,
        odr_date   Date NOT NULL ,
        odr_rating Int NOT NULL ,
        usr_id     Varchar (36) NOT NULL
	,CONSTRAINT Order_PK PRIMARY KEY (odr_id)

	,CONSTRAINT Order_User_FK FOREIGN KEY (usr_id) REFERENCES User(usr_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Table
#------------------------------------------------------------

CREATE TABLE `Table`(
        tbl_id           Varchar (36) NOT NULL ,
        tbl_availability Boolean NOT NULL ,
        usr_id           Varchar (36)
	,CONSTRAINT Table_PK PRIMARY KEY (tbl_id)

	,CONSTRAINT Table_User_FK FOREIGN KEY (usr_id) REFERENCES User(usr_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenir
#------------------------------------------------------------

CREATE TABLE `contenir`(
        crt_id Varchar (36) NOT NULL ,
        itm_id Varchar (36) NOT NULL
	,CONSTRAINT contenir_PK PRIMARY KEY (crt_id,itm_id)

	,CONSTRAINT contenir_Cart_FK FOREIGN KEY (crt_id) REFERENCES Cart(crt_id)
	,CONSTRAINT contenir_Items0_FK FOREIGN KEY (itm_id) REFERENCES Items(itm_id)
)ENGINE=InnoDB;

