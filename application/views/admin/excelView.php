<table border="1">
	<thead>
	<tr>
		<th>Relationship</th>
		<th>Family Id</th>
		<th>Name</th>
		<th>Caste</th>
		<th>Gender</th>
		<th>Date Of Birth</th>
		<th>Martial Status</th>
		<th>Place of Birth</th>
		<th>Education</th>
		<th>Occupation</th>
		<th>Award</th>
		<th>Present address</th>
		<th>Present district</th>
		<th>Present State</th>
		<th>Present Pincode</th>
		<th>Permanent address</th>
		<th>Permanent district</th>
		<th>Permanent State</th>
		<th>Permanent Pincode</th>
		<th>Country</th>
		<th>other Country Address</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>aadhar</th>
		<th>Registration Ddate</th>
	</tr>
</thead>
<tbody>
	<?php if(isset($excelList) && !empty($excelList)):?>
	<?php foreach ($excelList as $el):?>
	<tr>
		    <td><?=$el->relationship ?></td>
		    <td><?=$el->family_id ?></td>
			<td><?=$el->name ?></td>
			<td><?=$el->caste ?></td>
			<td><?=$el->gender ?></td>
			<td><?=$el->date_of_birth ?></td>
			<td><?=$el->marital_status ?></td>
			<td><?=$el->place_of_birth ?></td>
			<td><?=$el->education ?></td>
			<td><?=$el->occupation ?></td>
			<td><?=$el->award ?></td>
			<td><?=$el->present_address ?></td>
			<td><?=$el->present_district ?></td>
			<td><?=$el->present_state ?></td>
			<td><?=$el->present_pincode ?></td>
			<td><?=$el->permanent_address ?></td>
			<td><?=$el->permanent_district ?></td>
			<td><?=$el->permanent_state ?></td>
			<td><?=$el->permanent_pincode ?></td>
			<td><?=$el->country ?></td>
			<td><?=$el->other_country_address ?></td>
			<td><?=$el->email ?></td>
			<td><?=$el->mobile ?></td>
			<td><?=$el->aadhar ?></td>
			<td><?=$el->registration_date ?></td>
			
	</tr>
	<?php endforeach;?>
      
      <?php endif;?>
</tbody>
</table>
<?php
//This Header is used to make data download instead of display the data
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Reoprt.xls");

header("Pragma: no-cache");

header("Expires: 0");
?>