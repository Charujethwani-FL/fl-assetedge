<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="public/faviconAE-img.jpg">
     <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">


</head>
  <body>
    <?php
$mainHeaderPages = ['about.php', 'contact.php', 'inventory.php', 'privacy-policy.php', 'inventory-detail.php',];
$currentPage = basename($_SERVER['PHP_SELF']);
$headerClass = in_array($currentPage, $mainHeaderPages) ? 'main-header' : 'secondary-header';
include 'include/header.php';
?>
          
            <section class="breadcrumbs-section">
            <div class="breadcrumb">
            <h1 class="breadcrumb-heading">Privacy & Terms</h1>
            <a href="index.php">Home</a>
            <span>/</span>
            <span class="current">Privacy Policy</span>
            </div>
            </section>

      <section>  
            <div class="tp-wrapper">

            <!-- Header -->
            <!-- <div class="tp-header">
              <h1>Legal Information</h1>
              <p>Please review our Terms & Privacy Policy carefully</p>
            </div> -->

            <!-- Tabs -->
            
            <div class="tp-tabs">
              <div class="button-tp-div">
              <button class="tp-tab active" data-tab="terms">Terms & Conditions</button>
              <button class="tp-tab" data-tab="privacy">Privacy Policy</button>
              </div>
              <div class="tp-indicator" ></div>
              </div>
            
            <!-- TERMS -->
            <section class="terms-section tp-panel tp-content active" id="terms">

          <!-- <div class="tp-slide-layout">

            
              <aside class="tp-sidebar">
                <ul>
                  <li><a href="#overview">Overview</a></li>
                  <li><a href="#eligiblity">Eligibility</a></li>
                  <li><a href="#responsibilites">User Responsibilities</a></li>
                  <li><a href="#disclaimer">Property Disclaimer</a></li>
                <li><a href="#intellectual">Intellectual</a></li>
                  <li><a href="#liability">Liability</a></li>
                  <li><a href="#changes">Property Disclaimer</a></li>
                </ul>
              </aside>
              </div> -->


                <!-- Content Card -->
                <div class="tp-card">
                    <h2>Terms of Service</h2>
                        <div class="terms-block active" id="about">
                            <h3>1. About AssetEdge</h3>
                            <p>
                              AssetEdge is a corporate real estate family office and advisory platform that provides
                              information, consultation, and property-related services including commercial leasing,
                              tenant representation, portfolio management, and market research.
                            </p>
                          </div>

                          <div class="terms-block" id="use">
                            <h3>2. Use of Website</h3>
                            <p>
                              You agree to use this website only for lawful purposes. You must not use this website
                              in any manner that may cause harm, disrupt services, or violate applicable laws and
                              regulations.
                            </p>
                          </div>

                          <div class="terms-block" id="accuracy">
                            <h3>3. Accuracy of Information</h3>
                            <p>
                              While we strive to ensure that all listings, descriptions, and property details are
                              accurate, AssetEdge does not guarantee the completeness, reliability, or timeliness
                              of information displayed on the website. Property details, pricing, availability,
                              and specifications may change without prior notice.
                            </p>
                          </div>

                          <div class="terms-block" id="verification">
                            <h3>4. Listings and Property Verification</h3>
                            <p>
                              AssetEdge may verify listings to the best of its ability. However, verification does
                              not constitute a legal guarantee of ownership, title, approvals, or compliance.
                              Users are advised to conduct independent due diligence before entering into any
                              transaction.
                            </p>
                          </div>

                          <div class="terms-block" id="intellectual">
                            <h3>5. Intellectual Property</h3>
                            <p>
                              All content on this website including text, images, graphics, logos, icons, and design
                              elements are the property of AssetEdge unless otherwise stated. Unauthorized copying,
                              reproduction, or distribution of any material is prohibited.
                            </p>
                          </div>

                          <div class="terms-block" id="thirdparty">
                            <h3>6. Third-Party Links</h3>
                            <p>
                              This website may contain links to third-party websites for convenience. AssetEdge is
                              not responsible for the content, policies, or practices of such external websites.
                            </p>
                          </div>

                        <div class="terms-block" id="submissions">
                          <h3>7. User Submissions</h3>
                          <p>
                            If you submit any information through forms, email, or inquiry sections, you confirm
                            that the information provided is true and accurate. AssetEdge reserves the right to
                            remove or reject any submission deemed inappropriate or misleading.
                          </p>
                        </div>
                        <div class="terms-block" id="liability">
                          <h3>8. Limitation of Liability</h3>
                          <p>
                            AssetEdge shall not be liable for any direct, indirect, incidental, or consequential
                            damages arising out of the use of this website, reliance on information provided,
                            or inability to access the website.
                          </p>
                        </div>

                        <div class="terms-block" id="privacy-terms">
                          <h3>9. Privacy</h3>
                          <p>
                            Your use of the website is also governed by our Privacy Policy. By using the website,
                            you consent to the collection and use of information as described in the Privacy Policy.
                          </p>
                        </div>

                        <div class="terms-block" id="changes">
                          <h3>10. Changes to Terms</h3>
                          <p>
                            AssetEdge reserves the right to update or modify these Terms & Conditions at any time
                            without prior notice. Continued use of the website after changes are posted will be
                            considered acceptance of the revised terms.
                          </p>
                        </div>

                          <div class="terms-block" id="law">
                            <h3>11. Governing Law</h3>
                            <p>
                              These Terms & Conditions shall be governed by and interpreted in accordance with
                              the laws of India. Any disputes shall be subject to the jurisdiction of the courts
                              in Gurugram, Haryana.
                            </p>
                          </div>

                          <div class="terms-block" id="contact">
                            <h3>12. Contact Us</h3>
                            <p>
                              For any questions regarding these Terms & Conditions, you may contact us through
                              the website’s contact page or official email.
                            </p>
                          </div>
                  </div>

              </section>

              <!-- PRIVACY -->

              <section class="privacy-section tp-panel tp-content" id="privacy">
            <!-- <div class="tp-slide-layout">

              
              <aside class="tp-sidebar">
                <ul>
                  <li><a href="#privacy-collect">Information We Collect</a></li>
                  <li><a href="#privacy-use">How We Use Your Information</a></li>
                  <li><a href="#privacy-share">Sharing of Information</a></li>
                  <li><a href="#privacy-security">Data Security</a></li>
                  <li><a href="#privacy-cookies">Cookies & Analytics</a></li>
                  <li><a href="#privacy-links">Third-Party Links</a></li>
                  <li><a href="#privacy-consent">Your Consent</a></li>
                  <li><a href="#privacy-retention">Data Retention</a></li>
                  <li><a href="#privacy-rights">Your Rights</a></li>
                  <li><a href="#privacy-updates">Updates to This Policy</a></li>
                  <li><a href="#privacy-contact">Contact Us</a></li>
                </ul>
              </aside> 

            </div> -->

            <div class="tp-card">
              <h2>Privacy Policy</h2>

              <div class="privacy-block active" id="privacy-collect">
                <h3>1. Information We Collect</h3>
                <p>
                  We may collect the following types of information:
                </p>
                <h4>a) Personal Information</h4>
                <p>
                  Name<br>
                  Email address<br>
                  Phone number<br>
                  Company name<br>
                  Job title (if provided)<br>
                  Any details submitted through contact forms or inquiry forms
                </p>

                <h4>b) Property/Business Information</h4>
                <p>
                  Property requirements (location, size, budget, etc.)<br>
                  Leasing, buying, or investment preferences<br>
                  Information related to your commercial real estate inquiry
                </p>

                <h4>c) Technical Information</h4>
                <p>
                  IP address<br>
                  Browser type and version<br>
                  Device information<br>
                  Pages visited and time spent on the website<br>
                  Website usage behavior (through cookies and analytics tools)
                </p>
              </div>

              <div class="privacy-block" id="privacy-use">
                <h3>2. How We Use Your Information</h3>
                <p>
                  We use your information to:
                </p>
                <ul>
                  <li>Respond to your inquiries and requests</li>
                  <li>Share relevant property options and recommendations</li>
                  <li>Provide real estate advisory and consultation services</li>
                  <li>Improve website performance and user experience</li>
                  <li>Contact you for follow-ups, service updates, or relevant opportunities</li>
                  <li>Maintain internal records and compliance processes</li>
                </ul>
              </div>

              <div class="privacy-block" id="privacy-share">
                <h3>3. Sharing of Information</h3>
                <p>
                  AssetEdge does not sell or rent your personal information.
                </p>
                <p>
                  We may share information only in the following cases:
                </p>
                <ul>
                  <li>With trusted service providers (CRM tools, email services, analytics, hosting partners)</li>
                  <li>With property owners, developers, or agents when required to fulfill your request</li>
                  <li>When legally required by law, regulation, or government authority</li>
                  <li>To protect the rights, safety, and security of AssetEdge and its users</li>
                </ul>
              </div>

              <div class="privacy-block" id="privacy-security">
                <h3>4. Data Security</h3>
                <p>
                  We take reasonable and appropriate security measures to protect your information from unauthorized access, misuse, alteration, or disclosure.
                  However, no online platform can guarantee 100% security, and users are advised to share information responsibly.
                </p>
              </div>

              <div class="privacy-block" id="privacy-cookies">
                <h3>5. Cookies & Analytics</h3>
                <p>
                  AssetEdge may use cookies and third-party analytics tools to enhance user experience and understand website performance.
                </p>
                <p>
                  Cookies may help us:
                </p>
                <ul>
                  <li>Remember user preferences</li>
                  <li>Track visitor behavior and improve website usability</li>
                  <li>Measure website traffic and engagement</li>
                </ul>
                <p>
                  You can disable cookies through your browser settings, though some features of the website may not function properly.
                </p>
              </div>

              <div class="privacy-block" id="privacy-links">
                <h3>6. Third-Party Links</h3>
                <p>
                  Our website may contain links to third-party websites. AssetEdge is not responsible for the privacy practices or content of those websites.
                  We recommend reviewing their policies separately.
                </p>
              </div>

              <div class="privacy-block" id="privacy-consent">
                <h3>7. Your Consent</h3>
                <p>
                  By submitting your information on our website, you consent to AssetEdge collecting and using your information as described in this Privacy Policy.
                </p>
              </div>

              <div class="privacy-block" id="privacy-retention">
                <h3>8. Data Retention</h3>
                <p>
                  We retain personal information only for as long as necessary to:
                </p>
                <ul>
                  <li>Provide our services</li>
                  <li>Maintain records for business and compliance purposes</li>
                  <li>Meet legal and regulatory obligations</li>
                </ul>
              </div>

              <div class="privacy-block" id="privacy-rights">
                <h3>9. Your Rights</h3>
                <p>
                  You may request to:
                </p>
                <ul>
                  <li>Access your personal information</li>
                  <li>Correct or update your information</li>
                  <li>Withdraw consent for marketing communication</li>
                  <li>Request deletion of your data (subject to legal obligations)</li>
                </ul>
                <p>
                  To make such a request, please contact us through our official contact details.
                </p>
              </div>

              <div class="privacy-block" id="privacy-updates">
                <h3>10. Updates to This Policy</h3>
                <p>
                  AssetEdge may update this Privacy Policy from time to time. Changes will be posted on this page, and continued use of the website will be considered acceptance of the updated policy.
                </p>
              </div>

              <div class="privacy-block" id="privacy-contact">
                <h3>11. Contact Us</h3>
                <p>
                  If you have questions or concerns about this Privacy Policy, you can contact us through the website’s contact form or official communication channels.
                </p>
              </div>

            </div>
      </section>

          </div>
          
          </section>

          
      <!-- footer -->
        <?php
          include('include/footer.php');
        ?>

      <!--footer End-->

      <a href="tel:+919773880555" class="floating-call-btn" aria-label="Call Us">
          <i class="fi fi-sr-phone-call"></i>  
        <span class="pulse"></span>
      </a>

      <script>
        document.addEventListener("DOMContentLoaded", () => {
        // Tabs functionality
        const tabs = document.querySelectorAll(".tp-tab");
        const contents = document.querySelectorAll(".tp-panel");
        const indicator = document.querySelector(".tp-indicator");

        tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
        tabs.forEach(t => t.classList.remove("active"));
        contents.forEach(c => c.classList.remove("active"));

            tab.classList.add("active");
            document.getElementById(tab.dataset.tab).classList.add("active");
            
            
            if (indicator) indicator.style.transform = `translateX(${index * 170}px)`;
            
          });
        });

          // Sidebar click functionality
          document.querySelectorAll(".tp-sidebar a").forEach(link => {
            link.addEventListener("click", e => {
            e.preventDefault(); // Prevent default jump

            const targetId = link.getAttribute("href").substring(1);
            const parentSection = link.closest(".tp-panel"); // Active tab section

            // Hide all content blocks in this tab
            parentSection.querySelectorAll(".terms-block, .privacy-block").forEach(block => {
              block.classList.remove("active");
            });

            // Show clicked content block
            const targetBlock = parentSection.querySelector(`#${targetId}`);
            if (targetBlock) targetBlock.classList.add("active");
          }); 
          });
          });
          
window.addEventListener("scroll", function () {
  const header = document.querySelector(".main-header");

  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

          </script>
  </body>
     </html>