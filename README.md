# TelegramSearchEngine

<h2>Its a Telegram Search Engine</h2>

<b>With this script, you are able to search any public channel in Telegram messenger.</b>
<br>
⚠️<b>This script requires a Telegram account to search (userbot)</b>⚠️

-------------------------------------------------------


<h2>-How to run</h2> <p>
<p>
  
<table>
<tr>
<td>1- First of all , singup in <a href="https://telegram.org/apps">Telegram</a>.</td>
</tr>
<tr>
<td>2- Then you have to generate an <b>app_id</b> & <b>app_hash</b> from <a href="https://my.telegram.org/apps">this page</a>.</td>
</tr>
<tr>
<td>3- Put the generated <b>app_id</b> & <b>app_hash</b> in <code>index.php</code> instead of <b>xxx_ID_xxx</b> & <b>xxx_HASH_xxx</b> </td>
</tr>
<tr>
<td>4- Upload <code>index.php</code> to your host and run it. </td>
</tr>
<tr>
<td>5- First enter the Telegram account(userbot) number and then the login code. </td>
</tr>
<tr>
<td>6- Your web service is ready to use. </td>
</tr>
</table>

<h4>*Note that this library requires [^php >= 7.1]</h4>
<p>
<h2>-How to use</h2> <p>
<p>
 
<h5>You can use GET || POST methods to send requests.</h5>
<h5>We have some parameters here (<code>peer</code> , <code>type</code> , <code>q</code>).</h5>

<h3>details</h3>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Description</th>
    <th>Required</th>
  </tr>
  <tr>
    <td>peer</td>
    <td>string</td>
    <td>user/channel/group <b>username</b> or <b>link</b> (Private links are not supported)</td>
    <td>✅</td>
  </tr>
  <tr>
    <td>type</td>
    <td>string</td>
    <td>can be search or info (search type need <b>q</b> parameter to search a query.</td>
    <td>✅</td>
  </tr>
  <tr>
    <td>q</td>
    <td>string</td>
    <td>The word(s) that you want to search them in a channel (use it only when you put 'search' for <b>type</b> parameter.</td>
    <td>❌</td>
  </tr>
</table>


<h3>Contact Me</h3>

<a href="https://t.me/LampStack">Telegram</a><br>
<a href="mailto:xialop@outlook.com">Email</a>
