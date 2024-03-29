/*
Template Name: HUD - Responsive Bootstrap 5 Admin Template
Version: 1.5.0
Author: Sean Ngu
Website: http://www.seantheme.com/hud/
*/

var handleRenderTableData = function() {
	var table1 = $('#datatableDefault').DataTable({
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'fB>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
		buttons: [
			{ extend: 'csv', className: 'btn btn-outline-default btn-sm ms-2' }
		]

	});
	var table2 = $('#datatableDefault2').DataTable({
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'fB>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
		buttons: [
			{ extend: 'csv', className: 'btn btn-outline-default btn-sm ms-2' }
		]
	});
	var table3 = $('#datatableDefault3').DataTable({
		order: [[ 1, "desc" ]],
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'fB>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
		buttons: [
			{ extend: 'csv', className: 'btn btn-outline-default btn-sm ms-2' }
		]
		
	});
	var table3 = $('#datatableDefault4').DataTable({
		order: [[ 1, "desc" ]],
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'fB>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
		buttons: [
			{ extend: 'csv', className: 'btn btn-outline-default btn-sm ms-2' }
		]
		
	});
	var table3 = $('#datatableDefault5').DataTable({
		order: [[ 1, "desc" ]],
		dom: "<'row mb-3'<'col-md-4 mb-3 mb-md-0'l><'col-md-8 text-right'<'d-flex justify-content-end'fB>>>t<'row align-items-center'<'mr-auto col-md-6 mb-3 mb-md-0 mt-n2 'i><'mb-0 col-md-6'p>>",
		lengthMenu: [ 10, 20, 30, 40, 50 ],
		responsive: true,
		buttons: [
			{ extend: 'csv', className: 'btn btn-outline-default btn-sm ms-2' }
		]
		
	});
};




/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleRenderTableData();
});