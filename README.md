📦 Διαχείριση Προϊόντων σε PHP
📌 Περιγραφή

Αυτό το project είναι μια απλή εφαρμογή σε PHP που διαχειρίζεται μια λίστα προϊόντων.
Κάθε προϊόν περιέχει:

Όνομα (name)

Τιμή (price)

Ποσότητα (quantity)

Η εφαρμογή επιτρέπει:

➕ Προσθήκη προϊόντος

➖ Διαγραφή προϊόντος

🔄 Ενημέρωση ποσότητας

🔢 Ταξινόμηση προϊόντων κατά τιμή (αύξουσα σειρά)

🛠 Συναρτήσεις
addProduct(&$products, $name, $price, $quantity)

Προσθέτει νέο προϊόν στον πίνακα.

removeProduct(&$products, $name)

Διαγράφει προϊόν με βάση το όνομα (χωρίς διάκριση πεζών/κεφαλαίων).

updateQuantity(&$products, $name, $newQuantity)

Ενημερώνει την ποσότητα ενός προϊόντος.

sortByPrice(&$products)

Ταξινομεί τα προϊόντα σε αύξουσα σειρά τιμής και τα εμφανίζει.

▶️ Παράδειγμα Εκτέλεσης

Η εφαρμογή:

Προσθέτει το προϊόν Milk

Διαγράφει το προϊόν Potatoes

Αλλάζει την ποσότητα του Breads

Εμφανίζει τα προϊόντα ταξινομημένα κατά τιμή

🚀 Πώς να το τρέξετε

Αποθηκεύστε το αρχείο ως products.php

Εκτελέστε το σε τοπικό server (π.χ. XAMPP, WAMP, MAMP)

Ανοίξτε το στον browser:

http://localhost/products.php

📚 Τεχνολογίες

PHP

Arrays

Functions

usort()

Anonymous functions (closures)

📦 Product Management in PHP
📌 Description

This project is a simple PHP application that manages a list of products.
Each product contains:

Name

Price

Quantity

The application allows:

➕ Add a product

➖ Remove a product

🔄 Update product quantity

🔢 Sort products by price (ascending order)

🛠 Functions
addProduct(&$products, $name, $price, $quantity)

Adds a new product to the array.

removeProduct(&$products, $name)

Removes a product by name (case-insensitive).

updateQuantity(&$products, $name, $newQuantity)

Updates the quantity of a product.

sortByPrice(&$products)

Sorts products by price in ascending order and displays them.

▶️ Execution Example

The script:

Adds Milk

Removes Potatoes

Updates quantity of Breads

Displays products sorted by price

🚀 How to Run

Save the file as products.php

Run it on a local server (e.g., XAMPP, WAMP, MAMP)

Open in browser:

http://localhost/products.php

📚 Technologies Used

PHP

Arrays

Functions

usort()

Anonymous functions (closures)
