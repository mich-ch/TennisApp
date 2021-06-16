function hide_show_table(col_name) {
    var checkbox_val = document.getElementById(col_name).value;
    if (checkbox_val == "hide") {
        var all_col = document.getElementsByClassName(col_name);
        for (var i = 0; i < all_col.length; i++) {
            all_col[i].style.display = "none";
        }
        document.getElementById(col_name + "_head").style.display = "none";
        document.getElementById(col_name).value = "show";
    } else {
        var all_col = document.getElementsByClassName(col_name);
        for (var i = 0; i < all_col.length; i++) {
            all_col[i].style.display = "table-cell";
        }
        document.getElementById(col_name + "_head").style.display = "table-cell";
        document.getElementById(col_name).value = "hide";
    }
}

function sortTable(n, s) {
    var table,
        rows,
        switching,
        i,
        x,
        y,
        shouldSwitch,
        dir,
        switchcount = 0;
    table = document.getElementById(s);
    switching = true;

    dir = "asc";

    while (switching) {

        switching = false;
        rows = table.getElementsByTagName("TR");

        for (i = 1; i < rows.length - 1; i++) {
            shouldSwitch = false;

            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];

            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        } else {

            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}