<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta item="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>EMA Catering</title>
  <script src="https://code.jquery.com/jquery-3.1.0.slim.min.js" integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=" crossorigin="anonymous" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="img/ema_catering.svg" alt="" />
      </div>
      <!-- <div class="nav-gap"></div> -->
      <ul>
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="#menu">Menu</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
        <li>
          <a href="#social">Social</a>
        </li>
      </ul>
      <a href="#"></a>
    </nav>
  </header>
  <main>
    <section>
      <div class="banner">
        <h1 class="caption"><span>EMA Catering</span></h1>
      </div>
    </section>
    <span id="about" class="anchor"> </span>
    <section>
      <div class="h1-box">
        <h1>About Us</h1>
      </div>
      <div class="block">
        <h2>Our Story</h2>
        <p>EMA Enterprises, based in the Kalamazoo, Michigan, is owned and operated by Mike Leeuw. EMA has three divisions; restaurants, catering, and concessions. Currently, EMA owns and operates eight restaurants. EMA also operates a catering company that caters a wide range of events serving 4 to 40,000 people. The concession sector of the company includes Western Michigan University, the Kalamazoo Expo, and the Lansing Airport. Within the Lansing Airport the company franchises a Biggby Coffee.
          <br>
          <br> Mike Leeuw began the company in 2006 with one restaurant, and has continued to grow the company into what EMA is today. All three children have been heavily involved in the growing of the company, and continue to work for EMA when they return home from their respective locations around the country.</p>
      </div>
      <div class="block">
        <h2>Our Story</h2>
        <p>People and places related to the restaurant</p>
      </div>
    </section>
    <span id="menu" class="anchor"> </span>
    <section>
      <div class="menu-heading-box">
        <div class="menu-gap"></div>
        <div class="menu-heading">Menu</div>
        <iframe src="print.php" style="display:none" name="frame"></iframe>
        <a id="menu-print-button" onclick="frames['frame'].print()" value="menu-print" class="menu-print"><i class="fa fa-print"></i> Click Here to Print</a>
      </div>
      <div class="block">
        <div class="accordion-block">
          <button class="accordion">
            <h2>Ordering Options</h2></button>
          <div class="panel show">
            <div class="menu-items">
              <div class="item">
                <p><span>Food/Beverage</span>
                  <br> Food and beverage are available in individual and group servings. Catering orders come with all necessary plates, cups, utensils, napkins, serving utensils and condiments.
                </p>
              </div>
              <div class="item">
                <p><span>Events with Alcoholic Beverages</span>
                  <br> EMA Catering is only permitted to sell wine and beer off premises. Any alcohol purchases by the customer cannot be returned. EMA Catering will supply a bartender at $20 per hour charge. 1 bartender 100 guests is required.
                </p>
              </div>
              <div class="item item-box">
                <div>
                  <p><span>Event Services</span>
                    <br> Food and beverage are available in individual and group servings. Catering orders come with all necessary plates, cups, utensils, napkins, serving utensils and condiments.
                  </p>
                  <ol class="item-list">
                    <li>Pick up service at any restaurant location.</li>
                    <li>Drop off services, includes delivery, setup, and service staff for your event, service charge 18%.</li>
                    <li>Plated Dinners with full service wait staff add $5 per person. All selections subject to the service charge and tax.</li>
                  </ol>
                </div>
              </div>
              <div class="item">
                <p><span>Delivery</span>
                  <br> There is no minimum delivery fee. There is a 15% service charge on all delivery orders and applicable Michigan sales tax. All orders puchased outside a 30 mile radius will be assessed additional fee.
                </p>
              </div>
              <div class="item">
                <p><span>Cancellations</span>
                  <br> All Cancellations within 24 hours are subject to a 100% charge.
                </p>
              </div>
              <div class="item">
                <p><span>Payment</span>
                  <br> EMA Catering accepts Visa, Mastercard, American Express, and Discover.</p>
                  <img class="payment" src="img/visa.png" alt="visa" />
                  <img class="payment" src="img/mastercard.png" alt="mastercard" />
                  <img class="payment" src="img/amex.png" alt="amex" />
                  <img class="payment" src="img/discover.png" alt="discover" />
              </div>
            </div>
            <div class="menu-img"></div>
          </div>
        </div>
        <div class="printable accordion-block">
          <button class="accordion">
            <h2>Early Risers</h2></button>
          <div class="panel">
            <div class="menu-items">
              <h3 class="menu-caption"><i class="fa fa-asterisk" aria-hidden="true"></i>&nbsp;All breakfast selections include the continental breakfast</h3>
              <div class="item item-hover">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Continental Breakfast</span> $6.50/person
                </p>
                <br>
                <p class="to-hide hidden-item">
                  <br> Includes: muffins, pastries, juice, and Water Street Coffee.
                  <br>
                  <br> * Fresh fruit, yogurt, and granola available for an additional charge.</p>
              </div>
              <div class="item">
                <p><span>Oatmeal or Yogurt Bar</span> $9.50/person</p>
              </div>
              <div class="item">
                <p><span>Breakfast Sandwich or Wrap</span> $9.50/person</p>
              </div>
              <div class="item">
                <p><span>Our Famous Biscuits and Gravy</span> $10.50/person</p>
              </div>
              <div class="item">
                <p><span>Classic Skillet</span> $10/person</p>
              </div>
              <div class="item">
                <p><span>Breakfast Casserole</span> $10.75/person</p>
              </div>
              <div class="item">
                <p><span>Omlette Bar</span> $12.50/person</p>
              </div>
              <div class="item">
                <div class="item-box">
                  <p><span>Sides</span> $2/person</p>
                  <figure>
                    <div>
                      <figcaption>Meats</figcaption>
                      <ul>
                        <li>Bacon</li>
                        <li>Sausage</li>
                        <li>Sausage Links</li>
                        <li>Carved Ham</li>
                        <li>Chicken Links</li>
                      </ul>
                    </div>
                    <div>
                      <figcaption>Others</figcaption>
                      <ul>
                        <li>Eggs</li>
                        <li>Hashbrowns</li>
                        <li>Bagels</li>
                        <li>Muffins</li>
                        <li>Home Fries</li>
                      </ul>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
            <div class="menu-img"></div>
          </div>
        </div>
        <div class="accordion-block">
          <button class="accordion">
            <h2>Lunch Time</h2></button>
          <div class="panel">
            <div class="menu-items">
              <h3 class="menu-caption"><i class="fa fa-asterisk" aria-hidden="true"></i>&nbsp;All breakfast selections include the continental breakfast</h3>
              <div class="item item-hover">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Continental Breakfast</span> $6.50/person
                </p>
                <br>
                <p class="to-hide hidden-item">
                  <br> Includes: muffins, pastries, juice, and Water Street Coffee.
                  <br>
                  <br> * Fresh fruit, yogurt, and granola available for an additional charge.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Oatmeal or Yogurt Bar</span> $9.50/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Breakfast Sandwich or Wrap</span> $9.50/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Our Famous Biscuits and Gravy</span> $10.50/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Classic Skillet</span> $10/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Breakfast Casserole</span> $10.75/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <p><span>Omlette Bar</span> $12.50/person</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast" />
                <div class="item-box">
                  <p><span>Sides</span> $2/person</p>
                  <figure>
                    <div>
                      <figcaption>Meats</figcaption>
                      <ul>
                        <li>Bacon</li>
                        <li>Sausage</li>
                        <li>Sausage Links</li>
                        <li>Carved Ham</li>
                        <li>Chicken Links</li>
                      </ul>
                    </div>
                    <div>
                      <figcaption>Others</figcaption>
                      <ul>
                        <li>Eggs</li>
                        <li>Hashbrowns</li>
                        <li>Bagels</li>
                        <li>Muffins</li>
                        <li>Home Fries</li>
                      </ul>
                    </div>
                  </figure>
                </div>
              </div>
            </div>
            <div class="menu-img"></div>
          </div>
        </div>
        <div class="accordion-block">
          <button class="accordion">
            <h2>Create-a-Meal</h2></button>
          <div class="panel">
            <h2>Create-A-Meal</h2>
            <div class="description">
              <p>Create a customized dinner menu with your own personal selections from the list below. All meals include your choice of 3 of the following side dishes and a variety of assorted dinner rolls.</p>
              <p>
                <ul>
                  <li>1 Entree Meal $12/person</li>
                  <li>1 Entree Meal $14/person</li>
                  <li>3 Entree Meal $16/person</li>
                </ul>
              </p>
            </div>
            <div class="item longlist">
              <h3>Entrees</h3>
              <p>St. Louis Style BBQ Ribs (Market Price) <i class="fa fa-cutlery"></i></p>
              <p>Grilled Chicken Breast</p>
              <p>BBQ Pulled Pork</p>
              <p>Apple Bourbon Chicken</p>
              <p>Carved Pork Loin</p>
              <p>Chicken Monterey</p>
              <p>Carved Ham</p>
              <p>BBQ Chicken Breast</p>
              <p>Carved Turkey</p>
              <p>BBQ Pulled Chicken</p>
              <p>Carved Roast Beef</p>
              <p>Fried Chicken</p>
              <p>Beef Tenderloin (Market Price)</p>
              <p>Italian Lasagna</p>
              <p>Signature Burger</p>
              <p>Spinach Lasagna</p>
              <p>Prime Rib (Market Price)</p>
              <p>Cheese Lasagna</p>
              <p>New York Strip Steak</p>
              <p>Stuffed Shells</p>
              <p>Filet (Market Price)</p>
              <p>Eggplant Parmesan</p>
              <p>Grilled Salmon</p>
              <p>Portabella Mushroom Ravioli</p>
              <p>Bourbon Salmon</p>
              <p>White Cheddar Mac</p>
            </div>
            <div class="item longlist">
              <h3>Side Dishes</h3>
              <p>Signature Items</p>
              <p>Tossed Salad </p>
              <p>Roasted Vegetables</p>
              <p>Caesar Salad </p>
              <p>Apple Broccoli Salad</p>
              <p>Salad (spinach-seasonal)</p>
              <p>Red Skin Potatoes /or Mashed</p>
              <p>Pasta Salad </p>
              <p>Green Beans</p>
              <p>Cole Slaw</p>
              <p>Macaroni-n-Cheese</p>
              <p>Baked Potatoes</p>
              <p>Rice Pilaf</p>
              <p>Green Bean Medley</p>
              <p>Pulled Pork Baked Beans</p>
              <p>Baby Carrots</p>
              <p>Potato Salad</p>
              <p>Mashed Potatoes and Gravy</p>
              <p>Macaroni Salad</p>
              <p>German Potato Salad</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <span id="contact" class="anchor"> </span>
    <section>
      <div class="h1-box">
        <h1>Contact</h1>
      </div>
      <div class="block">
        <p>A list of the food we serve</p>
      </div>
    </section>
    <span id="social" class="anchor"> </span>
    <section>
      <div class="h1-box">
        <h1>Social</h1>
      </div>
      <div class="block">
        <p>A list of the food we serve</p>
      </div>
    </section>
  </main>
  <footer>
    <p>Designed by KzooToYou &copy;
      <script language="javascript" type="text/javascript">
      document.write(new Date().getFullYear());
      </script>
    </p>
  </footer>
</body>

</html>
