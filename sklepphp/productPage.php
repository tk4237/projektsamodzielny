
<?php
public static function printTile($row) {
    $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $img = $row['img'];
        $id = $row['id'];

        echo "
            <a href='productPage.php?product_id=$id'>
                <div class='product__tile'>
                    <img class='product__image' src='$img' alt='img' />
                    <h3>$name</h3>
                    <p>$price</p>
                </div>
            </a>
        ";
    }

    public static function getProducts() {
        $connection = SystemClass::dbConnect();
        $sql = "SELECT * FROM product";

        echo "
            <section class='shop__products'>
        ";
            $result = mysqli_query($connection, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                LayoutClass::printTile($row);
            }
        echo "
            </section>
        ";
    }   

    public static function showProduct() {
        $connection = SystemClass::dbConnect();
        $product_id = $_REQUEST['product_id'];
        $sql = "SELECT * FROM products WHERE id=$product_id";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);

        $img = $row['img'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price']

        echo "
            <section class='product__container'>
                <img src='$img' alt='img' />
                <div> class ='product__container'>
                    <h2>$name</h2>
                    <p>$description</p>
                    <p>$price</p>
                    <button type='button'>Dodaj do koszyka</button>
                </div>
            </section>
        ";
    }