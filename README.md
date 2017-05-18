# RFID

## Abstract:

Our concept is designed to help people in an office who are responsible for office equipment.
For all employees it is important that they support their work with the needed office equipment such as pens and papers. Therefore many bigger offices have their own department to keep control over everything that is needed at work.
To help them keep track of the stock, we implemented an online based service with RFID Technology.
Every time an employee goes to the office cabinet and takes something, he swipes the RFID-Tag,
which is glued to the material over the RFID-Reader. Without any complicated extra work for the
employees, the system registers the change and the current amount can be viewed by the service
that may have to order new office equipment.

## System Description:

There are consumable and lendable materials in an office cabinet. An RFID-tag which has its own
unique ID is attached to each item. When something is taken from the storage room, the item needs
to be swiped over the RFID reader. This reduces the item's amount by one. Office workers can check
the availability of all items on a website (pc-uebung.funpic.de). Due to the unique ID of the tag, the reader opens a PHP-Script that reduces the number of the certain item in the MySQL Database. This function is realized by the application “Web Link” which is offered by the touchatag website.
Reusable items can only be rented, when they are returned they are swiped over the RFID reader
again and the amount is updated on the aforementioned website. This function is based on the “Web
Link Wheel” from touchatag which allows to open another PHP-Site on its second contact to the
reader. Non-reusable items cannot be returned but their amount can be updated online when new
items are delivered. Before you can store it in the office cabinet, you have to connect a tag with the right website that reduces the number of the given item.
