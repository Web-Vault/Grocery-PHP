<?php include_once('db.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us - Grocery Store</title>

        <style>
                .contact-us {
                        max-width: 800px;
                        margin: 20px auto;
                        padding: 20px;
                        background: white;
                        /* White background for contact section */
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                }

                .contact-us h2 {
                        color: #28a745;
                        /* Match header color */
                }

                .contact-info,
                .contact-form,
                .faq,
                .social-media {
                        margin-bottom: 20px;
                }

                .contact-info h3,
                .contact-form h3,
                .faq h3,
                .social-media h3 {
                        color: #28a745;
                        /* Match header color */
                }

                .contact-form input,
                .contact-form select,
                .contact-form textarea {
                        width: 100%;
                        padding: 10px;
                        margin: 10px 0;
                        border: 1px solid #ccc;
                        /* Light border */
                        border-radius: 4px;
                        font-size: 16px;
                }

                .contact-form button {
                        background-color: #28a745;
                        /* Green button to match theme */
                        color: white;
                        padding: 10px 15px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 16px;
                }

                .contact-form button:hover {
                        background-color: #218838;
                        /* Darker green on hover */
                }

                .social-media a {
                        margin-right: 10px;
                        color: #28a745;
                        /* Green links */
                        text-decoration: none;
                }

                .social-media a:hover {
                        text-decoration: underline;
                        /* Underline on hover */
                }

              
                @media (max-width: 600px) {
              
                        .contact-form input,
                        .contact-form select,
                        .contact-form textarea {
                                font-size: 14px;
                        }
                }
        </style>

</head>

<body>
        <?php require('header.php') ?>

        <main class="contact-us">
                <h2>Contact Us</h2>
                <p>We are here to help you with any questions or concerns you may have.</p>

                <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><strong>Phone:</strong> +1 234 567 8901</p>
                        <p><strong>Email:</strong> support@grocerystore.com</p>
                        <p><strong>Address:</strong> 123 Grocery Lane, City, State, ZIP</p>
                        <p><strong>Business Hours:</strong> Mon - Fri: 8 AM - 8 PM</p>
                </div>

                <form class="contact-form">
                        <h3>Get in Touch</h3>
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="phone" placeholder="Your Phone Number (optional)">
                        <select name="subject">
                                <option value="Order Issue">Order Issue</option>
                                <option value="Product Inquiry">Product Inquiry</option>
                                <option value="Feedback">Feedback</option>
                        </select>
                        <textarea name="message" placeholder="Your Message" required></textarea>
                        <button type="submit">Submit</button>
                </form>

                <div class="faq">
                        <h3>Frequently Asked Questions</h3>
                        <p>Check out our <a href="#faq-section">FAQs</a> for quick answers.</p>
                </div>

                <div class="social-media">
                        <h3>Follow Us</h3>
                        <a href="https://facebook.com/grocerystore">Facebook</a>
                        <a href="https://instagram.com/grocerystore">Instagram</a>
                        <a href="https://twitter.com/grocerystore">Twitter</a>
                </div>
        </main>

        <?php require('footer.php') ?>
</body>

</html>