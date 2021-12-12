$(document).ready(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $(document).on('click', '#conceptos .card', function (e) {
        e.preventDefault();
        const codigo = e.currentTarget.ariaLabel;
        $("#detalle div p").text($(this).closest(".card").find("span:nth-child(2)").text());
        $("input[name='codigo']").val(codigo);
        Loading();
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
							<input type="checkbox" class="form-check-input" name="ok[${element['Codigo']}]" 
                            ${element['isActive'] ? 'checked' : ''}>
							<i class="input-frame"></i></label>
						</div>
                        <span class="font-500">${element['Codigo']}</span>
                        <span> | ${element['Descripcion']}</span>
                    </li>
                    `;
                });

                $("#detalle ul").html(body);
                $('#myTab a[href="#detalle"]').tab('show');
                Loading();
            }, error: function (response) {
                Swal.fire({ icon: 'error', title: 'Ocurrio un error.' });
            }
        });
    });

    $("#formConcepto").on("submit", function (e) {
        e.preventDefault();
        Loading();
        $.ajax({
            url: '/concepto',
            method: "POST",
            data: $(this).serialize(),
            success: function (response) {
                Loading();
                Swal.fire({ icon: 'success', title: 'Se guardó correctamente.' });
            }, error: function (response) {
                Swal.fire({ icon: 'error', title: 'Ocurrio un error.' });
            }
        });
    });

    $("#back").on('click', function (e) {
        $('#myTab a[href="#conceptos"]').tab('show');
    });
});