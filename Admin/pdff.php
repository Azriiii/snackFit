
 <?php 
include "../core/livraisonC.php";
include "../entities/livraison.php";
 function fetch_data()  
 {  
      $output = '';
	 $db = config::getConnexion();
     // $connect = mysqli_connect('mysql:host=localhost;dbname=snack_fit', 'root', '');  
      $sql = "SELECT * FROM livraison ORDER BY idlivraison";  
	  var_dump('root');
      $result = mysqli_query($db, $sql);  
      while($row = mysqli_fetch_array($result))  
      {        
      $output .= '<tr> 
                          <td>'.$row["idlivraison"].'</td>  
                          <td>'.$row["phonenumber"].'</td>  
                          <td>'.$row["adressel"].'</td>  
                          <td>'.$row["numfacture"].'</td>  
                          <td>'.$row["idlivreur"].'</td>
                          <td>'.$row["message"].'</td>  
                         						  
                     </tr>  
                          '; 
		   //var_dump($output);
      } var_dump($connect); 
      return $output;  
 }   
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Liste Des livraisons Chez snack_fit");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();
      $content = '';  
      $content .= '  
      <h3 align="center">Liste Des livraisons Chez snack_fit</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="20%">idlivraison</th>  
                <th width="20%"> phonenumber </th>  
                <th width="20%">adressel</th>  
                <th width="9%">adresse</th>  
                <th width="20%">numfacture</th>
                <th width="10%">idlivreur</th> 
				<th width="10%">message</th> 
           </tr>  
      ';   
      $content .= fetch_data();  
	
      $content .= '</table>'; 
	 //var_dump($content);
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
 }   
 ?> 