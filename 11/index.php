<?php

    include 'connect.php';

?>
<!------------------------------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html>
<head>
<title>Books</title>
</head>
<body>

    <h1>Fill Book Details</h1>
    <form action="index.php" method="post">

        Book Name: <input type="text" name="book_name" placeholder="Enter book_name" required>
        Author Name: <input type="text" name="author_name" placeholder="Enter author_name" required>
        Publisher: <input type="text" name="publisher" placeholder="Enter Publisher_name" required>
        ISBN number:<input type="text" name="ISBN" placeholder="Enter ISBN" required> 
        Price:<input type="text" name="price" placeholder="Enter Price" required>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>

<!------------------------------------------------------------------------------------------------------------>

<?php


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['submit']))
        {
            $book_name=$_POST['book_name'];
            $author_name=$_POST['author_name'];
            $publisher=$_POST['publisher'];
            $ISBN=$_POST['ISBN'];
            $price=$_POST['price'];

            $sql="insert into books(book_name,author_name,publisher,ISBN,price)
                              values('$book_name','$author_name','$publisher','$ISBN','$price')";
            
            $result=mysqli_query($conn,$sql);

            if($result)
            {
                    echo "Data Inserted Successfully!!";
            }
            else
            {
                die(mysqli_error($conn));
                //echo "invaliddddddddddddddddddddddddd!!";
            }
            


        }
    }




?>










