<?


$V_ORDER	="2005538017";
$V_AMOUNT	="159";
$V_CURRENCY	="RUR";
$V_RRN 	        ="225107515443";
$V_INT_REF	="9F913C3A8980CADE";
                  
$V_TRYTPE	="24";
$V_TERMINAL	="30000113";
$V_TIMESTAMP	="20120907123905";
$V_NONCE	="F2B2DD7E603A7A00";




?>


<html><head>


   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="GENERATOR" content="Mozilla/4.72 [en] (WinNT; U) 
[Netscape]">
   <title>Starichok</title>
</head><body alink="#ff0000" bgcolor="#fff5ee" vlink="#a52a2a" 
link="#ff0000" text="#000000">
&nbsp;
<center><h1>Money back</h1></center>
              
<form action="http://3ds2.mmbank.ru/cgi-bin/cgi_link" method="POST">

<center>
<table width="100%" cols="2">

<tbody><tr>

 <tr>
<td><div align="right">Order number:</div></td>
<td><div align="left">
<input name="ORDER" value="<?echo $V_ORDER;?>"   type="TEXT">
</div></td>
</tr>
        
<tr>
<td>
<div align="right">Order amount:</div>
</td>

<td><input name="AMOUNT" value="<?echo $V_AMOUNT;?>""  type="TEXT"></td>
</tr>

<tr>
<td>
<div align="right">Order currency:</div>
</td>
<td>
<div align="left">
<input name="CURRENCY" value="<?echo $V_CURRENCY;?>"" type="TEXT">
</div>
</td>
</tr>



<tr>
<td><div align="right">RRN</div></td>
<td><div align="left">
<input name="RRN" value="<?echo $V_RRN;?>""  type="TEXT">
</div></td>
</tr>


<tr>
<td><div align="right">INT_REF</div></td>
<td><div align="left">
<input name="INT_REF" value="<?echo $V_INT_REF;?>""  type="TEXT">
</div></td>
</tr>


<tr>
<td><div align="right">TRTYPE</div></td>
<td><div align="left">
<input name="TRTYPE"  value="<?echo $V_TRYTPE;?>"" type="TEXT">
</div></td>
</tr>



<tr>
<td><div align="right">Merchant Terminal:</div></td>
<td><div align="left">
<input name="TERMINAL"  value="<?echo $V_TERMINAL;?>""  
type="TEXT">
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


<?

if($V_ORDER == null){$V_ORDER= "-";} else {$V_ORDER=strlen($V_ORDER).$V_ORDER;}
if($V_AMOUNT == null){$V_AMOUNT= "-";} else {$V_AMOUNT=strlen($V_AMOUNT).$V_AMOUNT;}
if($V_CURRENCY == null){$V_CURRENCY= "-";} else {$V_CURRENCY=strlen($V_CURRENCY).$V_CURRENCY;}
if($V_RRN  == null){$V_RRN = "-";} else {$V_RRN=strlen($V_RRN ).$V_RRN ;}
if($V_INT_REF == null){$V_INT_REF= "-";} else {$V_INT_REF=strlen($V_INT_REF).$V_INT_REF;}
if($V_TRYTPE == null){$V_TRYTPE= "-";} else {$V_TRYTPE=strlen($V_TRYTPE).$V_TRYTPE;}
if($V_TERMINAL == null){$V_TERMINAL= "-";} else {$V_TERMINAL=strlen($V_TERMINAL).$V_TERMINAL;}
if($V_TIMESTAMP == null){$V_TIMESTAMP= "-";} else {$V_TIMESTAMP=strlen($V_TIMESTAMP).$V_TIMESTAMP;}
if($V_NONCE == null){$V_NONCE= "-";} else {$V_NONCE=strlen($V_NONCE).$V_NONCE;}




//1423E4AE3874B0342D164AC25E79EADB
$V_P_SIGN = strtoupper(hash_hmac(
        'sha1',
         $V_ORDER
        .$V_AMOUNT
        .$V_CURRENCY
        .$V_RRN
        .$V_INT_REF
        .$V_TRYTPE
        .$V_TERMINAL
        .$V_TIMESTAMP
        .$V_NONCE
        .$V_BACKREF,
            pack("H*", '1423E4AE3874B0342D164AC25E79EADB')
    )
        );
?>

<tr>
<td><div align="right">P_SIGN</div></td>
<td><div align="left">
<input name="P_SIGN"  value="<?echo $V_P_SIGN;?>" size="250" type="TEXT">
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