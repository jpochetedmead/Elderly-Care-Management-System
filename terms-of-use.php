<?php
session_start();

//TEMPLATES
    include 'templates/header.html';

    switch($_SESSION['level']) {
      case '1':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/admin-side-bar.html';
        break;
      case '2':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/supervisor-side-bar.html';
        break;
      case '3':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/doctor-side-bar.html';
        break;
      case '4':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/caregiver-side-bar.html';
        break;
      case '5':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/patient-side-bar.html';
        break;
      case '6':
        include 'templates/main-nav-bar.php';
        include 'templates/main-grid-content-2columns.html';
        include 'templates/familyMember-side-bar.html';
        break;
      default:
        include 'templates/alert-message-before-login.html';
        include 'templates/home-nav-bar.html';
        include 'templates/main-grid-content-1column.html';
    }

    include 'templates/main-content.html';
?>

<h1>Terms of Use</h1>
<hr>
<br>
<h2>Agreement Between User and Elderly Care Management System</h2>
<p>The Elderly Care Management System Web Site is comprised of various Web pages operated by Elderly Care Management System.</p>
<p>The Elderly Care Management System Web Site is offered to you conditioned on your acceptance without modification of the terms, conditions, and notices contained herein. Your use of the Elderly Care Management System Web Site constitutes your agreement to all such terms, conditions, and notices.</p>

<h2>Modification of These Terms of Use</h2>
<p>Elderly Care Management System reserves the right to change the terms, conditions, and notices under which the Elderly Care Management System Web Site is offered, including but not limited to the charges associated with the use of the Elderly Care Management System Web Site.</p>

<h2>Links to Third Party Sites</h2>
<p>The Elderly Care Management System Web Site may contain links to other Web Sites ("Linked Sites"). The Linked Sites are not under the control of Elderly Care Management System and Elderly Care Management System is not responsible for the contents of any Linked Site, including without limitation any link contained in a Linked Site, or any changes or updates to a Linked Site. Elderly Care Management System is not responsible for webcasting or any other form of transmission received from any Linked Site. Elderly Care Management System is providing these links to you only as a convenience, and the inclusion of any link does not imply endorsement by Elderly Care Management System of the site or any association with its operators</p>

<h2>No Unlawful or Prohibited Use</h2>
<p>As a condition of your use of the Elderly Care Management System Web Site, you warrant to Elderly Care Management System that you will not use the Elderly Care Management System Web Site for any purpose that is unlawful or prohibited by these terms, conditions, and notices. You may not use the Elderly Care Management System Web Site in any manner which could damage, disable, overburden, or impair the Elderly Care Management System Web Site or interfere with any other party's use and enjoyment of the Elderly Care Management System Web Site. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available or provided for through the Elderly Care Management System Web Sites.</p>

<h2>Use of Communication Services</h2>
<p>The Elderly Care Management System Web Site may contain bulletin board services, chat areas, news groups, forums, communities, personal web pages, calendars, and/or other message or communication facilities designed to enable you to communicate with the public at large or with a group (collectively, "Communication Services"), you agree to use the Communication Services only to post, send and receive messages and material that are proper and related to the particular Communication Service. By way of example, and not as a limitation, you agree that when using a Communication Service, you will not:</p>

<ul>
  <li>Defame, abuse, harass, stalk, threaten or otherwise violate the legal rights (such as rights of privacy and publicity) of others.
</li>
  <li>Publish, post, upload, distribute or disseminate any inappropriate, profane, defamatory, infringing, obscene, indecent or unlawful topic, name, material or information.
</li>
  <li>Upload files that contain software or other material protected by intellectual property laws (or by rights of privacy of publicity) unless you own or control the rights thereto or have received all necessary consents.
</li>
  <li>Upload files that contain viruses, corrupted files, or any other similar software or programs that may damage the operation of another's computer.
</li>
  <li>Advertise or offer to sell or buy any goods or services for any business purpose, unless such Communication Service specifically allows such messages.
</li>
  <li>Conduct or forward surveys, contests, pyramid schemes or chain letters.
</li>
  <li>Download any file posted by another user of a Communication Service that you know, or reasonably should know, cannot be legally distributed in such manner.
</li>
  <li>Falsify or delete any author attributions, legal or other proper notices or proprietary designations or labels of the origin or source of software or other material contained in a file that is uploaded.
</li>
  <li>Restrict or inhibit any other user from using and enjoying the Communication Services.
</li>
  <li>Violate any code of conduct or other guidelines which may be applicable for any particular Communication Service.
</li>
  <li>Harvest or otherwise collect information about others, including e-mail addresses, without their consent.
</li>
  <li>Violate any applicable laws or regulations.
</li>
</ul>


<p>Elderly Care Management System has no obligation to monitor the Communication Services. However, Elderly Care Management System reserves the right to review materials posted to a Communication Service and to remove any materials in its sole discretion. Elderly Care Management System reserves the right to terminate your access to any or all of the Communication Services at any time without notice for any reason whatsoever.</p>

<p>Elderly Care Management System reserves the right at all times to disclose any information as necessary to satisfy any applicable law, regulation, legal process or governmental request, or to edit, refuse to post or to remove any information or materials, in whole or in part, in Elderly Care Management System's sole discretion.</p>

<p>Always use caution when giving out any personally identifying information about yourself or your children in any Communication Service. Elderly Care Management System does not control or endorse the content, messages or information found in any Communication Service and, therefore, Elderly Care Management System specifically disclaims any liability with regard to the Communication Services and any actions resulting from your participation in any Communication Service. Managers and hosts are not authorized Elderly Care Management System spokespersons, and their views do not necessarily reflect those of Elderly Care Management System.</p>

<h2>Materials uploaded to a Communication Service may be subject to posted limitations on usage, reproduction and/or dissemination. You are responsible for adhering to such limitations if you download the materials.</h2>

<p>MATERIALS PROVIDED TO Elderly Care Management System OR POSTED AT ANY Elderly Care Management System WEB SITE
Elderly Care Management System does not claim ownership of the materials you provide to Elderly Care Management System (including feedback and suggestions) or post, upload, input or submit to any Elderly Care Management System Web Site or its associated services (collectively "Submissions"). However, by posting, uploading, inputting, providing or submitting your Submission you are granting Elderly Care Management System, its affiliated companies and necessary sublicensees permission to use your Submission in connection with the operation of their Internet businesses including, without limitation, the rights to: copy, distribute, transmit, publicly display, publicly perform, reproduce, edit, translate and reformat your Submission; and to publish your name in connection with your Submission.</p>

<p>No compensation will be paid with respect to the use of your Submission, as provided herein. Elderly Care Management System is under no obligation to post or use any Submission you may provide and may remove any Submission at any time in Elderly Care Management System's sole discretion.</p>

<p>By posting, uploading, inputting, providing or submitting your Submission you warrant and represent that you own or otherwise control all of the rights to your Submission as described in this section including, without limitation, all the rights necessary for you to provide, post, upload, input or submit the Submissions.</p>

<h2>Liability Disclaimer</h2>
<p>THE INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THE Elderly Care Management System WEB SITE MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. Elderly Care Management System AND/OR ITS SUPPLIERS MAY MAKE IMPROVEMENTS AND/OR CHANGES IN THE Elderly Care Management System WEB SITE AT ANY TIME. ADVICE RECEIVED VIA THE Elderly Care Management System WEB SITE SHOULD NOT BE RELIED UPON FOR PERSONAL, MEDICAL, LEGAL OR FINANCIAL DECISIONS AND YOU SHOULD CONSULT AN APPROPRIATE PROFESSIONAL FOR SPECIFIC ADVICE TAILORED TO YOUR SITUATION.</p>

<p>Elderly Care Management System AND/OR ITS SUPPLIERS MAKE NO REPRESENTATIONS ABOUT THE SUITABILITY, RELIABILITY, AVAILABILITY, TIMELINESS, AND ACCURACY OF THE INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS CONTAINED ON THE Elderly Care Management System WEB SITE FOR ANY PURPOSE. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ALL SUCH INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS ARE PROVIDED "AS IS" WITHOUT WARRANTY OR CONDITION OF ANY KIND. Elderly Care Management System AND/OR ITS SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO THIS INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS, INCLUDING ALL IMPLIED WARRANTIES OR CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT.</p>

<p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL Elderly Care Management System AND/OR ITS SUPPLIERS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF USE, DATA OR PROFITS, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OR PERFORMANCE OF THE Elderly Care Management System WEB SITE, WITH THE DELAY OR INABILITY TO USE THE Elderly Care Management System WEB SITE OR RELATED SERVICES, THE PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR FOR ANY INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS OBTAINED THROUGH THE Elderly Care Management System WEB SITE, OR OTHERWISE ARISING OUT OF THE USE OF THE Elderly Care Management System WEB SITE, WHETHER BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, EVEN IF Elderly Care Management System OR ANY OF ITS SUPPLIERS HAS BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. BECAUSE SOME STATES/JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IF YOU ARE DISSATISFIED WITH ANY PORTION OF THE Elderly Care Management System WEB SITE, OR WITH ANY OF THESE TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE Elderly Care Management System WEB SITE.</p>

<p>Service Contact: <a class="text-info" href="mailto:notify@ElderlyCareManagementSystem.com">notify@ElderlyCareManagementSystem.com</a></p>

<h2>Termination/Access Restriction</h2>
<p>Elderly Care Management System reserves the right, in its sole discretion, to terminate your access to the Elderly Care Management System Web Site and the related services or any portion thereof at any time, without notice. General To the maximum extent permitted by law, this agreement is governed by the laws of the State of Washington, U.S.A. and you hereby consent to the exclusive jurisdiction and venue of courts in King County, Washington, U.S.A. in all disputes arising out of or relating to the use of the Elderly Care Management System Web Site.</p>

<p>Use of the Elderly Care Management System Web Site is unauthorized in any jurisdiction that does not give effect to all provisions of these terms and conditions, including without limitation this paragraph. You agree that no joint venture, partnership, employment, or agency relationship exists between you and Elderly Care Management System as a result of this agreement or use of the Elderly Care Management System Web Site.</p>

<p>Elderly Care Management System's performance of this agreement is subject to existing laws and legal process, and nothing contained in this agreement is in derogation of Elderly Care Management System's right to comply with governmental, court and law enforcement requests or requirements relating to your use of the Elderly Care Management System Web Site or information provided to or gathered by Elderly Care Management System with respect to such use. If any part of this agreement is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the agreement shall continue in effect.Unless otherwise specified herein, this agreement constitutes the entire agreement between the user and Elderly Care Management System with respect to the Elderly Care Management System Web Site and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral or written, between the user and Elderly Care Management System with respect to the Elderly Care Management System Web Site.</p>

<p>A printed version of this agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent an d subject to the same conditions as other business documents and records originally generated and maintained in printed form. It is the express wish to the parties that this agreement and all related documents be drawn up in English.</p>

<h2>Copyright and Trademark Notices</h2>
<p>All contents of the Elderly Care Management System Web Site are copyright © 2021 by Elderly Care Management System and/or its suppliers. All rights reserved.</p>

<h2>Trademarks</h2>
<p>The names of actual companies and products mentioned herein may be the trademarks of their respective owners.</p>

<p>The example companies, organizations, products, people and events depicted herein are fictitious. No association with any real company, organization, product, person, or event is intended or should be inferred.</p>

<p>Any rights not expressly granted herein are reserved.</p>

<p>NOTICES AND PROCEDURE FOR MAKING CLAIMS OF COPYRIGHT INFRINGEMENT</p>

<p>Pursuant to Title 17, United States Code, Section 512(c)(2), notifications of claimed copyright infringement under United States copyright law should be sent to Service Provider's Designated Agent. ALL INQUIRIES NOT RELEVANT TO THE FOLLOWING PROCEDURE WILL RECEIVE NO RESPONSE. See Notice and Procedure for Making Claims of Copyright Infringement.</p>

<?php // TEMPLATES
  include 'templates/end-main-content.html';
  include 'templates/footer.html';
?>
