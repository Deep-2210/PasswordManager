</div>
<br>
</div>

<?php $this->load->view('include/js_file_links'); ?>
<script src="<?php echo base_url('assets/js/script.js')?>"></script>
<script>
$(document).ready(function () {
$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
});
});
</script>


</body>
</html>