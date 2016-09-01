<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta item="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, height=calc(100vh - 60px)">
  <title>EMA Catering</title>
  <script src="https://code.jquery.com/jquery-3.1.0.slim.min.js" integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=" crossorigin="anonymous" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
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
    </nav>
  </header>
  <main>
    <section>
      <div class="banner">
        <h1 class="caption">EMA Catering</h1>
      </div>
    </section>
    <span id="about" class="anchor"> </span>
    <section>
      <div class="h1-box">
        <h1>About Us</h1>
      </div>
      <div class="block">
        <div class="menu-items">
          <div class="item">
            <h2>Our Story</h2>
            <p>EMA Enterprises, based in the Kalamazoo, Michigan, is owned and operated by Mike Leeuw. EMA has three divisions; restaurants, catering, and concessions. Currently, EMA owns and operates eight restaurants. EMA also operates a catering company that caters a wide range of events serving 4 to 40,000 people. The concession sector of the company includes Western Michigan University, the Kalamazoo Expo, and the Lansing Airport. Within the Lansing Airport the company franchises a Biggby Coffee.
            </p>
            <p>Mike Leeuw began the company in 2006 with one restaurant, and has continued to grow the company into what EMA is today. All three children have been heavily involved in the growing of the company, and continue to work for EMA when they return home from their respective locations around the country.</p>
          </div>
          <div class="item">
            <h2>Heading</h2>
            <p>Words and words and words and...</p>
            <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
          </div>
        </div>
      </div>
    </section>
    <span id="menu" class="anchor"></span>
    <section>
      <div class="menu-heading-box">
        <div class="menu-gap"></div>
        <div class="menu-heading">Menu</div>
        <iframe src="print.php" style="display:none" name="frame"></iframe>
        <a id="menu-print-button" onclick="frames['frame'].print()" value="menu-print" class="menu-print"><i class="fa fa-print"></i> Click Here to Print</a>
      </div>
      <div class="block">
        <div id="accordion" class="accordion">
          <h3 class="accordion-heading">Ordering Options</h3>
          <div class="accordion-content">
            <div class="menu-items">
              <div class="item">
                <p><span>Food/Beverage</span></p>
                <p>Food and beverage are available in individual and group servings. Catering orders come with all necessary plates, cups, utensils, napkins, serving utensils and condiments.</p>
              </div>
              <div class="item">
                <p><span>Events with Alcoholic Beverages</span></p>
                <p>EMA Catering is only permitted to sell wine and beer off premises. Any alcohol purchases by the customer cannot be returned. EMA Catering will supply a bartender at $20 per hour charge. 1 bartender 100 guests is required.</p>
              </div>
              <div class="item item-box">
                <div>
                  <p><span>Event Services</span></p>
                  <p>Food and beverage are available in individual and group servings. Catering orders come with all necessary plates, cups, utensils, napkins, serving utensils and condiments.</p>
                  <ol class="item-list">
                    <li>Pick up service at any restaurant location.</li>
                    <li>Drop off services, includes delivery, setup, and service staff for your event, service charge 18%.</li>
                    <li>Plated Dinners with full service wait staff add $5 per person. All selections subject to the service charge and tax.</li>
                  </ol>
                </div>
              </div>
              <div class="item">
                <p><span>Delivery</span></p>
                <p>There is no minimum delivery fee. There is a 15% service charge on all delivery orders and applicable Michigan sales tax. All orders puchased outside a 30 mile radius will be assessed additional fee.</p>
              </div>
              <div class="item">
                <p><span>Cancellations</span></p>
                <p>All Cancellations within 24 hours are subject to a 100% charge.</p>
              </div>
              <div class="item">
                <p><span>Payment</span></p>
                <p>EMA Catering accepts Visa, Mastercard, American Express, and Discover.</p>
                <div class="payment-block">
                  <img class="payment" src="img/visa.png" alt="visa" />
                  <img class="payment" src="img/mastercard.png" alt="mastercard" />
                  <img class="payment" src="img/amex.png" alt="amex" />
                  <img class="payment" src="img/discover.png" alt="discover" />
                </div>
              </div>
            </div>
            <div class="menu-img"></div>
          </div>
          <h3 class="accordion-heading">Early Risers</h3>
          <div class="accordion-content">
            <div class="menu-items">
              <h4 class="menu-caption"><i class="fa fa-asterisk" aria-hidden="true"></i>&nbsp;All breakfast selections include the continental breakfast</h3>
              <div class="item item-hover">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Continental Breakfast</span> $6.50/person</p>
                <p>Includes: muffins, pastries, juice, and Water Street Coffee.
                <p>* Fresh fruit, yogurt, and granola available for an additional charge.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Oatmeal or Yogurt Bar</span> $9.50/person</p>
                <p>Your choice of build-your-own oatmeal or yogurt with toppings including fresh fruit, granola, brown sugar and more.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Breakfast Sandwich or Wrap</span> $9.50/person</p>
                <p>Homemade fresh English muffin or tortilla with egg, sausage and cheese.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Our Famous Biscuits and Gravy</span> $10.50/person</p>
                <p>Hot biscuits served with our homemade gravy.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Classic Skillet</span> $10/person</p>
                <p>Traditional scrambler complete with eggs, hashbrowns, green peppers, and onions, all smothered with melted cheddar cheese.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Breakfast Casserole</span> $10.75/person</p>
                <p>EMA's breakfast casserole. Eggs, cheese, bacon, seasoning, and baked to a golden brown. Also available vegetarian.</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
                <p><span>Omlette Bar</span> $12.50/person</p>
                <p>Variety of meat, cheese, and vegetable toppings, cooked to order (18% service charge).</p>
              </div>
              <div class="item">
                <img class="item-img" src="img/continental-breakfast.jpg" alt="continental-breakfast">
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
          <h3 class="accordion-heading">Lunch Time</h3>
          <div class="accordion-content">
            <div class="menu-items">
              <div class="item">
                <h3>Portable Salad Bar</h3>
                <h4>$9.50/person</h4>
                <p><em>15 person minimum • For smaller groups please ask.</em></p>
                <p>Brought to your business. Includes fresh salad items, hot soup or assortment of wraps or sandwiches.</p>
              </div>
              <div class="item">
                <h3>Taco Bar</h3>
                <h4>$10.50/person</h4>
                <p>Your choice of pulled pork, pulled chicken, taco meat, or chicken strips. Sides: hard or soft shell tortillas, salsa, sour cream, shredded cheese, onions, refried beans, lettuce, and tomato.</p>
              </div>
              <div class="item">
                <h3>Hot Dog Bar</h3>
                <h4>$10.50/person</h4>
                <p>We believe we have the best hot dogs in Kalamazoo!
                <p>A quarter pound all beef hot dog on a special grilled hot dog bun with chili, cheese, ketchup, mustard, relish, and onion.</p>                  
                <p>Also comes with chips and two side dishes.</p>
                <p><strong>We grill our buns on site!</strong></p>
              </div>
              <div class="item">
                <h3>Baked Potato Bar with Salad</h3>
                <h4>$10.50/person</h4>
                <p>Brought to your business. Includes butter, sour cream, bacon, chili &amp; broccoli, fresh salad items.</p>
              </div>
              <div class="item">
                <h3>Deli Bar</h3>
                <h4>$9.50/person</h4>
                <p>Comes with turkey, ham, roast beef and chicken salad. American and Swiss cheese. Tomato, lettuce, onions, pickles, sliced green peppers, mayo, spicy and yellow mustard.</p>
              </div>
              <div class="item">
                <h3>Lunch in a Basket</h3>
                <h4>$8.50/person</h4>
                <p>Wraps or sandwiches are arranged in an attractive basket or tray with chips and a side dish.</p>
              </div>
              <div class="item">
                <h3>Signature Soups</h3>
                <h4>$2.75/person</h4>
                <p>Chili, Broccoli Cheese, Hot Pepper Crab, Chicken Noodle, and Wisconsin Cheese Soup.
                  
                  <em>Special soup requests require a 48 hour notice</em></p>
              </div>
              <div class="item">
                <h3>Executive Black Box Lunch</h3>
                <h4>$7.75/person</h4>
                <p>Your choice of turkey, ham, roast beef, egg salad, tuna, apple chicken salad, chicken strips, or chicken salad with lettuce, tomato, mustard and mayo as a sandwich or wrap. Wraps include shredded cheese and ranch.
                  
                  OR
                  
                  A veggie wrap with assorted delicious vegetables. Add guacamole for $0.50.
                  
                  * To complete your lunch, you will find chips, a side dish, and dessert.</p>
              </div>
              <div class="item">
                <h3>Kid's Meals</h3>
                <h4>$4.99/person</h4>
                <p>Mac and cheese, hot dogs, peanut butter and jelly, 1/4 lb hamburger or Dino Nuggets.
                  
                  Includes chips, a cookie, and drink.
                  
                  Add fries for $1.00.</p>
              </div>
            </div>
          </div>
          <h3 class="accordion-heading">Create-a-Meal</h3>
          <div class="accordion-content">
            <div class="menu-items">
              <div class="menu-caption">
                <h4>Create a customized dinner menu with your own personal selections from the list below. All meals include your choice of 3 of the following side dishes and a variety of assorted dinner rolls.</h4>
                <ul>
                  <li>1 Entree Meal $12/person</li>
                  <li>2 Entree Meal $14/person</li>
                  <li>3 Entree Meal $16/person</li>
                  <li class="signature"><i class="fa fa-cutlery"></i> Signature Item</li>
                </ul>
              </div>
              <div class="item longlist">
                <h3>Entrees</h3>
                <p class="signature">St. Louis Style BBQ Ribs (Market Price) <i class="fa fa-cutlery"></i></p>
                <p>Grilled Chicken Breast</p>
                <p class="signature">BBQ Pulled Pork <i class="fa fa-cutlery"></i></p>
                <p class="signature">Apple Bourbon Chicken <i class="fa fa-cutlery"></i></p>
                <p>Carved Pork Loin</p>
                <p>Chicken Monterey</p>
                <p>Carved Ham</p>
                <p>BBQ Chicken Breast</p>
                <p>Carved Turkey</p>
                <p>BBQ Pulled Chicken</p>
                <p>Carved Roast Beef</p>
                <p>Fried Chicken</p>
                <p>Beef Tenderloin (Market Price)</p>
                <p class="signature">Italian Lasagna <i class="fa fa-cutlery"></i></p>
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
                <p class="signature">White Cheddar Mac <i class="fa fa-cutlery"></i></p>
              </div>
              <div class="item longlist">
                <h3>Side Dishes</h3>
                <p>Signature Items</p>
                <p>Tossed Salad </p>
                <p>Roasted Vegetables</p>
                <p>Caesar Salad </p>
                <p class="signature">Apple Broccoli Salad <i class="fa fa-cutlery"></i></p>
                <p>Salad (spinach-seasonal)</p>
                <p>Red Skin Potatoes /or Mashed</p>
                <p>Pasta Salad </p>
                <p>Green Beans</p>
                <p class="signature">Cole Slaw <i class="fa fa-cutlery"></i></p>
                <p>Macaroni-n-Cheese</p>
                <p>Baked Potatoes</p>
                <p>Rice Pilaf</p>
                <p>Green Bean Medley</p>
                <p class="signature">Pulled Pork Baked Beans <i class="fa fa-cutlery"></i></p>
                <p>Baby Carrots</p>
                <p>Potato Salad</p>
                <p>Mashed Potatoes and Gravy</p>
                <p>Macaroni Salad</p>
                <p>German Potato Salad</p>
              </div>
            </div>
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
        <div class="menu-items">
          <div class="item contact-item">
            <h2>Send Us a Message</h2>
            <form class="email" action="email.php" method="post">
              <label for="#name">Name</label>
              <input id="name" type="text" name="name" required="" placeholder="Mike Leeuw">
              <label for="#email">Email</label>
              <input id="email" type="email" name="email" required="" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" placeholder="mike@leeuw.com">
              <label for="#phone">Phone Number</label>
              <input id="phone" type="phone" name="phone" required="" pattern="^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$" placeholder="(269) 344-1415">
              <label for="#message">Message</label>
              <textarea id="message" type="textarea" name="message" required="" placeholder="Please let us know how we can help you."></textarea>
              <button id="email-submit" type="submit" value="Submit"><i class=""></i><span>Submit</span></button>
            </form>
          </div>
          <div class="item contact-item">
            <!-- <h2>...Or Give Us a Call<a href="tel:2693441415"><i class="fa fa-phone"></i> (269) 344-1415</a></h2> -->
            <h2>Our Location</h2>
            <div class="map-container">
              <div class="map">
                <div class="map-caption">
                  <strong><h2>Click To Use</h2></strong>
                </div>
                <iframe height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/search?q=4010+Gull+Road,+Kalamazoo,+MI,+United+States&amp;key=AIzaSyCCGx7iveK21dme8OuLgX9Je7TUDDCw3_A"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <span id="social" class="anchor"> </span>
    <section>
      <div class="h1-box">
        <h1>Social</h1>
      </div>
      <div class="block">
        <p>Some words about other words.</p>
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
