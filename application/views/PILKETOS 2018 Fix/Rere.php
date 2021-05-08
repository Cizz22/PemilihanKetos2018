<html>
	<head> 
	</head>
	<body>
	<script language="JavaScript">
		if (confirm('Apakah Anda Yakin Dengan Pilihan Anda ? ')) {
		document.location.href='<?php echo base_url('Voting/RERE');?>'
	} else {
    document.location.href='<?php echo base_url('Voting');?>'
	}
	</script>

	</body>
</html>