<?php  include "first.php"; 
// (1) Извеждане на променливите за meta keywords, description и title, САМО за INDEX страницата
// $description - за Мeta description      
// $keywords    - за Мeta keywords
// $title       - за Title таг
// (1) КРАЙ

$pr = mysql_query("SELECT * FROM products WHERE id = ". $_GET['id'] ."");
	$pro = mysql_fetch_assoc($pr);
?>
<?php include "header.php"; ?>
<?php
//<!--- Левия сайдбар на сайта --->
 include "left_sidebar.php";
 //<!--- Края на левия сайдбара --->
 ?>
<?php // НАЧАЛО НА HTML КОДА ?>



<tr>
		
	<td colspan=2>
	
	 <table border=0 cellspacing=0 cellpadding=0 width=1020 align=center>
	 <tr>
		
		<td width=249 class=mappa valign=top>
		<!-- mappa e itinerario -->
<br>
<br><?php include('s_machine.php');?>		   
		<!-- fine  mappa e itinerario -->
	 

		</td>


		<td valign=top class=testo>	
		
		<!-- corpo destinazione -->

	

	  <table width="700" border="0" cellpadding="0" cellspacing="0"  align=center bgcolor=#F6E4C0> 	  <tr> 	      <td width=700 class=testonormale valign=top>	  				<!-- TOP DEL QUADRO -->	  				 	   			<!-- -CORPO DEL QUADRO -->	  				<table width=680 border=0 cellspacing=0 cellpadding=0  bgcolor=#F6E4C0 height=40>	  				<tr>	  					

	  <td width=640 valign=top align=center class=testonormale>
	  
	  
<table width=720 border=0 cellspacing=0 cellpadding=0  bgcolor=#F6E4C0 >

<tr>
	<td  class=testonormale>
	<div style='height: 30px;'></div>
		<B><font size=4><?php echo $pro['name']; ?></font></CENTER></B><BR>
			<br>
	
			<div style='margin-left: auto; margin-right: auto; width: 650px;'>
			
				<div style='float: left; padding-right: 20px;'><img style='border-radius: 10px; border: #fff solid 6px;' width='300' src='<?php echo $pro['img'] ?>'></div>
				<?php echo $pro['info']; ?>
				
				<div style='float: right; border-top: 1px dotted #453018; color: #453018;  width: 310px;'> </div>
				<div style='height: 1px;'></div>
			<b> <span style='font-size: 15px;'>	<?php echo $pro['short_info']; ?> </b>
				
				<div style='margin-left: 460px; min-width: 150px; height: 30px; line-height: 30px; vertical-align: middle; background: #AA8961; border-radius: 10px; font-size: 16px;' align='center'><table><tr><td><b>Цена:</b> <?php echo $pro['price']; ?></td></tr></table> </div>
				
			</div>
			
			
		
		
	</td>
</tr>
<tr>
	<td>
			<div>
			<div style='height: 30px;'></div>
		<B><font size=4>Допълнителна информация</font></CENTER></B><BR>
				
			<?php echo $pro['info_3'] ?>	
					
			
			</div>
	</td>
</tr>	



</table>

<BR><BR>				</td>		<td width=10 height=80></td>			</tr>			</table> 			<!-- FINE DEL QUADRO -->							</DIV>			    </td>			  </tr>				<tr>					<td colspan=2 class=testonormale valign=top align=center  bgcolor=#F6E4C0><BR><BR><BR></td> </tr></table>
<!-- Mirrored from www.deserti-viaggilevi.it/archivionewsletter.php?ID=28 by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 23 Sep 2012 09:36:20 GMT -->
</html>			<br /><br/>
 
		<!-- fine  corpo destinazione  -->
	 

		</td>


		
	 </tr>

	 </table>
	</td>

 </tr>


<?php 
// <!--- Десния сайдбар на сайта --->
include "right_sidebar.php";
//<!--- Края на десния сайдбара --->
?>
<?php include "footer.php"; ?>