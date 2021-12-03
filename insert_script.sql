USE jailadal;

INSERT INTO
  `user` (
    `id`,
    `usr_lastname`,
    `usr_firstname`,
    `usr_mail`,
    `usr_phone`,
    `usr_password`,
    `usr_picture_url`,
    `usr_privilege`
  )
VALUES
  (
    '2d64bc83-f45f-4a04-bd60-8da98a130eea',
    'Kamel',
    'Kametoa',
    'test12@mail.fr',
    '0638918585',
    'test12password',
    'path',
    '0'
  ),
  (
    'fd31d2d2-1b36-42d4-8d02-8a164f83c12e',
    'Cafe',
    'John',
    'mail1234@test.fr',
    '0502020202',
    'password1123124',
    'password1234',
    '0'
  ),
  (
    '3c09a81a-b2a1-478c-8416-654902bf664b',
    'Doe',
    'John',
    'john@mail.fr',
    '010101010101',
    'passwordjohn',
    'path',
    '0'
  ),
  (
    'ea55bba5-2ea4-49fc-ab3d-265d43691950',
    'cruz',
    'frederic',
    'frederic@mail.fr',
    '02020212002',
    'passwordfred',
    'path',
    '0'
  );

INSERT INTO
  `table` (`id`, `tbl_availability`, `usr_id`)
VALUES
  (
    '3c27d553-00f4-47bf-bbd5-88448c8f9e01',
    '0',
    '2d64bc83-f45f-4a04-bd60-8da98a130eea'
  ),
  (
    'ef579c8c-c47f-4da7-adc0-8146308efe4e',
    '0',
    '3c09a81a-b2a1-478c-8416-654902bf664b'
  ),
  (
    '7cd3afb1-9249-4728-9d42-1a7b4e557a6e',
    '1',
    NULL
  );

INSERT INTO
  `category` (`id`, `cat_name`)
VALUES
  ('19c39348-9d47-4738-99fe-b0381872951f', 'Menu'),
  ('c2fdea93-072d-4524-b7e2-923cd14f41b6', 'Entrée'),
  ('3454c61a-0cd3-4ff8-83fa-444b39c7bcd6', 'Plat'),
  (
    'b0eb062d-67e6-4cf7-a32c-6992910ddba1',
    'Boisson'
  ),
  (
    '1b95e72d-46b0-49b4-a574-47e822fb9011',
    'Dessert'
  );


INSERT INTO
  `item` (
    `id`,
    `itm_name`,
    `itm_description`,
    `itm_price`,
    `itm_image`,
    `itm_qty`,
    `itm_original_qty`,
    `cat_id`
  )
VALUES
  (
    '42db9601-4941-485d-aacd-59addbd9d398',
    'Menu dejeuner',
    'Une formule comprenant un plat , une boisson et un dessert',
    '10',
    'imgPath',
    '100',
    '100',
    '1b95e72d-46b0-49b4-a574-47e822fb9011'
  ),
  (
    'da9f7f1b-d5a2-4988-9a07-e57e3497eba3',
    'Menu goûter',
    'Une formule comprenant un café ou chocolat chaud et un dessert',
    '4',
    'ImgPath',
    '100',
    '100',
    'b0eb062d-67e6-4cf7-a32c-6992910ddba1'
  ),
  (
    'a46733a5-e011-4663-863e-dedd453d226c',
    'Taboulé',
    'Un taboulé plutôt bon',
    '3.88',
    'imgPath',
    '20',
    '40',
    '19c39348-9d47-4738-99fe-b0381872951f'
  ),
  (
    'daf7b2f4-5c33-4784-9b32-27388e321ad0',
    'BigMag',
    'Ce serait pour un menu BigMag svp',
    '5.4',
    'imgPath',
    '200',
    '200',
    '3454c61a-0cd3-4ff8-83fa-444b39c7bcd6'
  ),
  (
    'c66f3625-d47d-4426-a151-fbe3fddf98fa',
    'Cola',
    'Un déliceux \"Cola\" de chez MagDo',
    '2',
    'imgPath',
    '200',
    '220',
    'b0eb062d-67e6-4cf7-a32c-6992910ddba1'
  ),
  (
    '6fb762e1-a20f-4447-bd6c-4ffc6c8065b8',
    'Donut',
    'Un donut bien rond bien troué',
    '2.5',
    'imgPath',
    '150',
    '150',
    'c2fdea93-072d-4524-b7e2-923cd14f41b6'
  );

INSERT INTO 
  `cart` (`id`, `usr_id`) 
VALUES 
  (
    '9e64d782-4dd4-468f-a16f-6e607ac91a06',
   '2d64bc83-f45f-4a04-bd60-8da98a130eea'
   ), 
  (
    '07712de9-a87f-4363-a9af-bb89b1c37bea',
   '3c09a81a-b2a1-478c-8416-654902bf664b'
   ), 
  (
    '642ba958-4968-4a4a-95e4-44c3d68401e3',
   'ea55bba5-2ea4-49fc-ab3d-265d43691950'
   ), 
  (
    '2243e053-e8ee-4114-bf85-61a49ba551b2',
   'fd31d2d2-1b36-42d4-8d02-8a164f83c12e'
   );

INSERT INTO 
  `order` (`id`, `odr_status`, `odr_date`, `odr_rating`, `usr_id`) 
VALUES 
  (
    '049052e0-df35-4f3f-9614-a830f583578d',
    '1', '2021-12-03',
    '2',
    '2d64bc83-f45f-4a04-bd60-8da98a130eea'
  ), 
  (
    'bea1a4ce-a0cc-4426-a3e0-8007714ffc02', 
    '2', 
    '2021-12-03', 
    '4', 
    '3c09a81a-b2a1-478c-8416-654902bf664b'
  );