<?php
// includes/header.php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenMart - Online Shopping</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--Icons-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/ZENMART/assets/css/styles.css">
</head>
<body>
  <!--main header-->  
    <header class="main-header">
        <div class="container-fluid">
            <div class=" row d-flex flex-wrap align-items-center py-2">
              <div class="top-navbar col-md-3 col-12 mb-2">  
                <a href="#" style="text-decoration:none">
                    <img src="../assets/images/zenmart_logo.png" style="width:75px"/>
                    <span class="logo-text">ZenMart</span>
                </a> 
              </div>   
               <div class="col-md-3 col-12">
                <form class="d-flex zenmart-search">

                    <!-- Category Dropdown -->
                       <select class="form-select category-select">
                            <option selected>All</option>
                            <option>Electronics</option>
                            <option>Fashion</option>
                            <option>Books</option>
                            <option>Groceries</option>
                        </select>

                     <!-- Search Input -->
                     <input type="text" class="form-control search-input" placeholder="Search Products Here">

                    <!-- Search Button -->
                     <button class="btn search-btn" type="submit">
                            <i class="bi bi-search"></i>
                     </button>

                </form>
             </div>
           </div>
        </div>  
     </header>
                    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
       
</body>
</html>
    