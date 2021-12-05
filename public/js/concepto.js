$(document).ready(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $(document).on('click', '.tab-content .table button', function (e) {
        e.preventDefault();
        const codigo = e.currentTarget.ariaLabel;
        loadingFMessage();
        $.ajax({
            url: `/concepto/${codigo}`,
            method: "GET",
            success: function (response) {
                const res = response;
                let body = '';
                res.forEach(function callback(element, index, array) {
                    body += `
                    <li class="list-group-item">
                        <div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" name="ok[${element['Codigo']}]">
							<i class="input-frame"></i></label>
						</div>
                        <span class="font-500">${element['Codigo']}</span>
                        <span> | ${element['Descripcion']}</span>
                    </li>
                    `;
                });

                $("#detalle ul").html(body);
                $('#myTab a[href="#detalle"]').tab('show')
                hideFMessage();
            }, error: function (response) {
                console.log(response);
            }
        });
    });
    $("#formConcepto").on('submit', (e) =>{
        e.preventDefault();
        loadingFMessage();
        $.ajax({
            url: '/concepto',
            method: "POST",
            data: $(this).serialize(),
            success: function (response) {
                console.log(response);
                hideFMessage();
            }, error: function (response) {
                console.log(response);
            }
        });
    });
})