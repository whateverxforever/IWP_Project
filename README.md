# IWP_Project
E-Commerce website (Pure CSS no Boootstrap)
CSE3002 – INTERNET AND WEB PROGRAMMING


PROJECT REPORT
Title: Velasca – eCommerce Website




BY

GAURAV ACHARYA    	17BCE1120
MOHIKA THAMPI           17BCE1079

### Abstract

The objective of this project is to create an online store for shoe-shopping. The basic idea is to enable a customer to purchase any shoe of his/her preference from the website in a simple and convenient manner - they would not have to take the trouble of manually going to a shoe store to do the same. 
Velasca uses the internet as the sole method of selling shoes to interested customers. By using the website, vendors are able to display their products online, and customers can browse through the available options provided by the sellers. 
The website defines a straightforward and elegant method to purchase shoes online. The inviting and undemanding interface will grant users an effortless experience and is sure to bring them back for more. 
 
 
### Contents


I.	Introduction
II.	Analysis - Technology Used
III.	Design
IV.	Implementation
V.	Screenshots
VI.	Conclusion











### Introduction

These days, a website is one of the first things a prospect will look for when dealing with any business. A great website has the ability to have significant impact on your business, particularly how your target market and prospects view your business. First impressions count, and a great website design impacts your business by establishing trust and credibility, engaging the shoppers, and providing effortless customer support.
We have developed a website, Velasca, for the project in an effort to make it as engaging and dynamic as possible. Its working can be further explained concisely.
The Home page provides several links – to display featured products, to choose from Men or Women (male/female products), as well as Customer Login.
New shoppers are initially required to sign up for the website with their name and password and can select a username of their choice. From this point onwards, shoppers have to log in by entering correct credentials. 
After authentication, they can proceed to browse and buy products. The home page exhibits a slideshow of featured products that the user may be interested in; apart from this, they can also shop category-wise by clicking on the given links.

When the users click on a product that they are interested in, they are able to see the entire product description. This includes the product’s image, cost, available sizes and reviews, which may act as deciding factors for the users to choose the particular item.
Velasca also provides a ‘Shopping cart’ feature which enables the shoppers to save their interested products to buy them later or continue shopping for more items. Furthermore, it displays the total amount that the shoppers need to pay during checkout

### Analysis

System analysis is the process of gathering and interpreting facts, diagnosing problems and using the information to recommend improvements on the system. System analysis is a problem-solving activity that requires intensive communication between the system users and system developers.
In order to make Velasca dynamic and more interactive we have included a database link to the website. Using this, we store information regarding the users and their credentials, which is then checked during their log in attempts. The website has been formulated using the languages given below.

###TECHNOLOGY USED

Front end: 
▪	HTML (Hypertext Markup Language)

HTML is the language that we use to create webpages. It is a text-based approach to d escribing how content is structured. This markup tells a web browser how to display the text, images, and other forms of multimedia on a webpage.
To keep the markup separate from the actual content of the HTML file, a particular syntax is used. These special components are called tags.
	
	Sample Code: 
	   <div class="wrap">
            <div id="arrow-left" class="arrow"></div>
            <div id="slider">
                <div class="slide slide1">
                    <div class="slide-content">
                        <span></span>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-content">
                        <span>New Nike Arrivals</span>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-content">
                        <span></span>
                    </div>
                </div>
            </div>

	
▪	CSS (Cascading Style Sheets) 

Cascading style sheets are used to format the layout of webpages. They can be used to define text styles, table sizes, and other aspects of webpages that previously could only be defined in a page’s HTML.
	
	Sample Code: 
.login {
    text-align: center;
}

form button {
    border: none;
    background: #ff3399;
    width: 27%;
    font-size: 16px;
    height: 45px;
    color: white;

}

▪	JavaScript and jQuery

JavaScript is a programming language commonly used in web development. JS is a client-side scripting language, which means the source code is processed by the client’s web browser rather than on the web server. This means JS functions can run after a webpage has loaded without communicating with the server.
	
	Sample Code:
let sliderImages = document.querySelectorAll(".slide"),
    arrowLeft = document.querySelector("#arrow-left"),
    arrowRight = document.querySelector("#arrow-right"),
    current = 0;

// Clear all images
function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = "none";
    }
}

jQuery is a concise and fast JavaScript library that can be used to simplify event handling, HTML document traversing, Ajax interactions, and animation for speedy website development. jQuery simplifies the HTML’s client-side scripting, thus simplifying applications development.

Sample Code:
$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');

    } else {
        $('nav').removeClass('black');
    }
})


Back end: 
▪	PHP
Stands for “Hypertext Preprocessor”(idk why 😂🤣🤷‍♂️). PHP is an HTML-embedded web scripting language. This means PHP code can be inserted into the HTML of a Web page. When a PHP page is accessed, the PHP code is read or "parsed" by the server the page resides on. The output from the PHP functions on the page are typically returned as HTML code, which can be read by the browser. Because the PHP code is transformed into HTML before the page is loaded, users cannot view the PHP code on a page. This make PHP pages secure enough to access databases and other secure information.

	Sample Code:
 	<div style="display:block; float:left; width:60%">
            <?php
                foreach ($_SESSION['cart'] as $var){
                $p_id = $var[0];       
                include 'cart.inc.php';
                }
            ?>
        </div>


XAMPP stands for Cross-Platform, Apache, MySQL and PHP and is the preferred choice when it comes to deploying localhost web applications. It provides a solid and reliable foundation for building web application. XAMPP is a local web server which helps you to make the web application at your system and run at the browser at local environment at your local machine. In your local machine you would need to use specially Apache server and MySQL.

Database: 
▪	SQL (Structured Query Language)

Structured Query Language (SQL) is a standard computer language for relational database management and data manipulation. SQL is used to query, insert, update and modify data. Most relational databases support SQL, which is an added benefit for database administrators (DBAs), as they are often required to support databases across several different platforms.

        $sql = 'SELECT * FROM Users WHERE username="'.$username.'";';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)==0){
            header("Location: login.php?error=User doesn't exist!");
            exit();
        }


### DESIGN

DATABASE DESIGN
Database files are the key source of information into the system. It is the process of designing database files, which are the key source of information to the system. The files should be properly designed and planned for collection, accumulation, editing and retrieving the required information.
The organization of data in database aims to achieve three major objectives: 
•	Data integration.
•	Data integrity.
•	Data independence.
 
 
 
### CONCLUSION

Velasca has been developed with much dedication and attention to detail. We strive to present to users a delightful experience from the moment they start browsing the website. The engaging display of products showcased is sure to appeal to the shoppers and catch their attention. The security that we provide is in par with the contemporary demands of the customers. Moreover, we value the users’ contributions and always leave room for improvement and evolution. We wish everyone a happy shopping experience with Velasca.


 
 
 
 
 
