<?

//$V_AMOUNT	="159";
//$V_CURRENCY	="RUR";
//$V_ORDER	="2005538017";
//$V_DESC 	="Red-Book";
//$V_MERCH_NAME	="TEST";
//$V_MERCH_URL	="3ds2.mmbank.ru";
//$V_MERCHANT	="465206030000113";
//$V_TERMINAL	="30000113";
//$V_EMAIL	="zaitsev_ai@mmbank.ru";
//$V_TRYTPE	="1";
//$V_COUNTRY	="RU";
//$V_MERCH_GMT	="";
//$V_TIMESTAMP	="20120915114528";
//$V_NONCE	="F2B2DD7E603A7A00";
//$V_BACKREF	="http://rrb.bestmakers.ru/SYS/KolyaOperaMozilaChrome/back_ref.php";


$V_AMOUNT ="45";
$V_CURRENCY ="USD";
$V_ORDER ="10000182";
$V_DESC  ="armenmerangulianopera";
$V_MERCH_NAME ="armenmerangulianopera";
$V_MERCH_URL ="http://www.armenmerangulianopera.com";
$V_MERCHANT ="465206030000113";
$V_TERMINAL ="30000113";
$V_EMAIL ="info@armenmerangulianopera.com";
$V_TRYTPE ="1";
$V_COUNTRY ="RU";
$V_MERCH_GMT ="";
$V_TIMESTAMP = "20120924105336";
$V_NONCE ="F2B2DD7E603A7A00";
$V_BACKREF ="http://rrb.bestmakers.ru/SYS/KolyaOperaMozilaChrome/back_ref.php";


?>

<html><head>


   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="GENERATOR" content="Mozilla/4.72 [en] (WinNT; U) 
[Netscape]">
   <title>Starichok</title>
</head><body alink="#ff0000" bgcolor="#fff5ee" vlink="#a52a2a" 
link="#ff0000" text="#000000">
&nbsp;
<center><h1>Starichok</h1></center>



<form action="http://3ds2.mmbank.ru/cgi-bin/cgi_link" method="POST">

<center>
<table width="100%" cols="2">

<tbody><tr>

<tr>
<td>
<div align="right">Order amount:</div>
</td>

<td><input name="AMOUNT" value="<?echo $V_AMOUNT;?>"  type="TEXT"></td>
</tr>

<tr>
<td>
<div align="right">Order currency:</div>
</td>
<td>
<div align="left">
<input name="CURRENCY" value="<?echo $V_CURRENCY;?>" type="TEXT">
</div>
</td>
</tr>

<tr>
<td><div align="right">Order number:</div></td>
<td><div align="left">
<input name="ORDER" value="<?echo $V_ORDER;?>"   type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Order description:</div></td>
<td><div align="left">
<input name="DESC" value="<?echo $V_DESC;?>"  type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Merchant Name:</div></td>
<td><div align="left">
<input name="MERCH_NAME"  value="<?echo $V_MERCH_NAME;?>" type="TEXT">
</div></td>
</tr>
<tr>

 <tr>
<td><div align="right">Merchant URL:</div></td>
<td><div align="left">
<input name="MERCH_URL"  value="<?echo $V_MERCH_URL;?>" type="TEXT">
</div></td>
</tr>


<tr>
<td><div align="right">Merchant ID:</div></td>
<td><div align="left">
<input name="MERCHANT" value="<?echo $V_MERCHANT;?>"  type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Merchant Terminal:</div></td>
<td><div align="left">
<input name="TERMINAL"  value="<?echo $V_TERMINAL;?>"  
type="TEXT">
</div></td>
</tr>


<tr>
<td><div align="right">Email</div></td>
<td><div align="left">
<input name="EMAIL"value="<?echo $V_EMAIL;?>" type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">TRTYPE</div></td>
<td><div align="left">
<input name="TRTYPE"  value="<?echo $V_TRYTPE;?>" type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Country</div></td>
<td><div align="left">
<input name="COUNTRY"  value="<?echo $V_COUNTRY;?>"  type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Merchant GMT</div></td>
<td><div align="left">
<input name="MERCH_GMT"  value="<?echo $V_MERCH_GMT;?>"  type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">Timestamp</div></td>
<td><div align="left">
<input name="TIMESTAMP" value="<?echo $V_TIMESTAMP;?>"  type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">NONCE</div></td>
<td><div align="left">
<input name="NONCE" value="<?echo $V_NONCE;?>"  type="TEXT">
</div></td>
</tr>


<tr>
<td><div align="right">BackRef</div></td>
<td><div align="left">
        <input name="BACKREF"  size="250"
       value="<?echo $V_BACKREF;?>"
       type="TEXT">
</div></td>
</tr>
<?


if($V_AMOUNT == null){$V_AMOUNT= "-";} else {$V_AMOUNT=strlen($V_AMOUNT).$V_AMOUNT;}
if($V_CURRENCY == null){$V_CURRENCY= "-";} else {$V_CURRENCY=strlen($V_CURRENCY).$V_CURRENCY;}
if($V_ORDER == null){$V_ORDER= "-";} else {$V_ORDER=strlen($V_ORDER).$V_ORDER;}
if($V_DESC  == null){$V_DESC = "-";} else {$V_DESC =strlen($V_DESC ).$V_DESC ;}
if($V_MERCH_NAME == null){$V_MERCH_NAME= "-";} else {$V_MERCH_NAME=strlen($V_MERCH_NAME).$V_MERCH_NAME;}
if($V_MERCH_URL == null){$V_MERCH_URL= "-";} else {$V_MERCH_URL=strlen($V_MERCH_URL).$V_MERCH_URL;}
if($V_MERCHANT == null){$V_MERCHANT= "-";} else {$V_MERCHANT=strlen($V_MERCHANT).$V_MERCHANT;}
if($V_TERMINAL == null){$V_TERMINAL= "-";} else {$V_TERMINAL=strlen($V_TERMINAL).$V_TERMINAL;}
if($V_EMAIL == null){$V_EMAIL= "-";} else {$V_EMAIL=strlen($V_EMAIL).$V_EMAIL;}
if($V_TRYTPE == null){$V_TRYTPE= "-";} else {$V_TRYTPE=strlen($V_TRYTPE).$V_TRYTPE;}
if($V_COUNTRY == null){$V_COUNTRY= "-";} else {$V_COUNTRY=strlen($V_COUNTRY).$V_COUNTRY;}
if($V_MERCH_GMT == null){$V_MERCH_GMT= "-";} else {$V_MERCH_GMT=strlen($V_MERCH_GMT).$V_MERCH_GMT;}
if($V_TIMESTAMP == null){$V_TIMESTAMP= "-";} else {$V_TIMESTAMP=strlen($V_TIMESTAMP).$V_TIMESTAMP;}
if($V_NONCE == null){$V_NONCE= "-";} else {$V_NONCE=strlen($V_NONCE).$V_NONCE;}
if($V_BACKREF == null){$V_BACKREF= "-";} else {$V_BACKREF=strlen($V_BACKREF).$V_BACKREF;}

$v_str ="2453USD81000018021armenmerangulianopera21armenmerangulianopera36http://www.armenmerangulianopera.com1546520603000011383000011330info@armenmerangulianopera.com102RU-142012091913243916F2B2DD7E603A7A0064http://rrb.bestmakers.ru/SYS/KolyaOperaMozilaChrome/back_ref.php";


//1423E4AE3874B0342D164AC25E79EADB
$V_P_SIGN = strtoupper(hash_hmac(
        'sha1',
         $V_AMOUNT
        .$V_CURRENCY
        .$V_ORDER
        .$V_DESC 
        .$V_MERCH_NAME
        .$V_MERCH_URL
        .$V_MERCHANT
        .$V_TERMINAL
        .$V_EMAIL
        .$V_TRYTPE
        .$V_COUNTRY
        .$V_MERCH_GMT
        .$V_TIMESTAMP
        .$V_NONCE
        .$V_BACKREF,
            pack("H*", '1423E4AE3874B0342D164AC25E79EADB')
    ) );


//$V_P_SIGN = strtoupper(hash_hmac(
//        'sha1',
//         $v_str,
//            pack("H*", '1423E4AE3874B0342D164AC25E79EADB')
//    ) );


$v_str = $V_AMOUNT
        .$V_CURRENCY
        .$V_ORDER
        .$V_DESC 
        .$V_MERCH_NAME
        .$V_MERCH_URL
        .$V_MERCHANT
        .$V_TERMINAL
        .$V_EMAIL
        .$V_TRYTPE
        .$V_COUNTRY
        .$V_MERCH_GMT
        .$V_TIMESTAMP
        .$V_NONCE
        .$V_BACKREF;
$v_key_str = pack("H*", '1423E4AE3874B0342D164AC25E79EADB');
?>


<tr>
<td><div align="right">P_SIGN</div></td>
<td><div align="left">
<input name="P_SIGN"  value="<?echo $V_P_SIGN;?>" size="250" type="TEXT">
</div></td>
</tr>

<tr>
<td><div align="right">v_str</div></td>
<td><div align="left">
<input name="v_str"  value="<?echo $v_str;?>" size="250" type="TEXT">
</div></td>
</tr>



<tr>
<td></td>

<td>
<br>


<input value="Approve" name="SEND_BUTTON" type="SUBMIT">
</td>
</tr>
</tbody></table>
</center>

<br>&nbsp;

</form></body></html>