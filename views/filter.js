function filterCars()
{
  var filterpricemin = document.getElementById("filterpricemin").value;
  var filterpricemax = document.getElementById("filterpricemax").value;
  var filteryearmin = document.getElementById("filteryearmin").value;
  var filteryearmax = document.getElementById("filteryearmax").value;
  var filtermileagemin = document.getElementById("filtermileagemin").value;
  var filtermileagemax = document.getElementById("filtermileagemax").value;
  $.ajax({
    type: 'post',
    url: 'controllers/controller.php',
    data: {
      filterpricemin:filterpricemin,
      filterpricemax:filterpricemax,
      filteryearmin:filteryearmin,
      filteryearmax:filteryearmax,
      filtermileagemin:filtermileagemin,
      filtermileagemax:filtermileagemax
    }
  });   
  return false;
}