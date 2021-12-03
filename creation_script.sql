#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS jailadal CHARACTER SET utf8 COLLATE utf8_general_ci;

USE jailadal;

#------------------------------------------------------------
# Table: Category
#------------------------------------------------------------
CREATE TABLE `category`(
        id Varchar (36) NOT NULL,
        cat_name Varchar (100) NOT NULL,
        CONSTRAINT Category_PK PRIMARY KEY (id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Item
#------------------------------------------------------------
CREATE TABLE `item`(
        id Varchar (36) NOT NULL,
        itm_name Varchar (100) NOT NULL,
        itm_description Varchar (255) NOT NULL,
        itm_price Float NOT NULL,
        itm_image Varchar (255) NOT NULL,
        itm_qty Int NOT NULL,
        itm_original_qty BigInt NOT NULL,
        cat_id Varchar (36) NOT NULL,
        CONSTRAINT Item_PK PRIMARY KEY (id),
        CONSTRAINT Item_Category_FK FOREIGN KEY (cat_id) REFERENCES Category(id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: User
#------------------------------------------------------------
CREATE TABLE `user`(
        id Varchar (36) NOT NULL,
        usr_lastname Varchar (50) NOT NULL,
        usr_firstname Varchar (100) NOT NULL,
        usr_mail Varchar (100) NOT NULL,
        usr_phone Varchar (50) NOT NULL,
        usr_password Varchar (100) NOT NULL,
        usr_picture_url Varchar (100) NOT NULL,
        usr_privilege Boolean NOT NULL,
        CONSTRAINT User_PK PRIMARY KEY (id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Cart
#------------------------------------------------------------
CREATE TABLE `cart`(
        id Varchar (36) NOT NULL,
        usr_id Varchar (36) NOT NULL,
        CONSTRAINT Cart_PK PRIMARY KEY (id),
        CONSTRAINT Cart_User_FK FOREIGN KEY (usr_id) REFERENCES User(id),
        CONSTRAINT Cart_User_AK UNIQUE (usr_id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Order
#------------------------------------------------------------
CREATE TABLE `order`(
        id Varchar (36) NOT NULL,
        odr_status Int NOT NULL,
        odr_date Date NOT NULL,
        odr_rating Int NOT NULL,
        usr_id Varchar (36) NOT NULL,
        CONSTRAINT Order_PK PRIMARY KEY (id),
        CONSTRAINT Order_User_FK FOREIGN KEY (usr_id) REFERENCES User(id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Table
#------------------------------------------------------------
CREATE TABLE `table`(
        id Varchar (36) NOT NULL,
        tbl_availability Boolean NOT NULL,
        usr_id Varchar (36),
        CONSTRAINT Table_PK PRIMARY KEY (id),
        CONSTRAINT Table_User_FK FOREIGN KEY (usr_id) REFERENCES User(id)
) ENGINE = InnoDB;

#------------------------------------------------------------
# Table: Contains
#------------------------------------------------------------
CREATE TABLE `contains`(
        id Varchar (36) NOT NULL,
        crt_id Varchar (36) NOT NULL,
        itm_id Varchar (36) NOT NULL,
        CONSTRAINT contains_PK PRIMARY KEY (id),
        CONSTRAINT contains_Cart_FK FOREIGN KEY (crt_id) REFERENCES Cart(id),
        CONSTRAINT contains_Item0_FK FOREIGN KEY (itm_id) REFERENCES Item(id)
) ENGINE = InnoDB;