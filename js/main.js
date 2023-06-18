$(document).ready(function() {
    const documentList = $('#document-list');
    const documentObject = $('#document-object');
    const viewFullScreen = $('#viewFullScreen');
    const departamento = $("#departamento");
    const tipo = $("#tipo");
    const uploadForm = $('#uploadForm');
    const fileToUpload = $('#fileToUpload');
    
    function openDocumentInNewTab(e) {
        e.preventDefault();
        documentObject.attr('data', $(this).attr('href'));
        viewFullScreen.removeClass('d-none');
    }

    function fullScreen() {
        window.open(documentObject.attr('data'));
    }

    function handleDepartmentChange() {
        tipo.find("option").hide();
        const department = $(this).val();

        switch (department) {
            case "politica":
                tipo.find(".politica").show();
                break;
            case "sgi":
                tipo.find(".politica, .it").hide();
                tipo.find(".manual, .po, .formulario").show();
                break;
            default:
                tipo.find(".politica, .manual").hide();
                tipo.find(".it, .po, .formulario").show();
                break;
        }

        if (tipo.find(".politica:selected").length > 0) {
            tipo.prop('selectedIndex', 0);
        }
    }

    function handleResizeMove(event) {
        const target = event.target;
        const x = (parseFloat(target.getAttribute('data-x')) || 0);
        const y = (parseFloat(target.getAttribute('data-y')) || 0);

        target.style.width = event.rect.width + 'px';
        target.style.height = event.rect.height + 'px';

        target.style.webkitTransform = target.style.transform =
            'translate(' + x + 'px,' + y + 'px)';

        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    function handleFormSubmission(e) {
        e.preventDefault();
        const file = fileToUpload[0].files[0];

        if (file.type !== "application/pdf") {
            alert("Por favor, faça o upload de um arquivo PDF.");
            return;
        }

        if (departamento.val() === '' || tipo.val() === '') {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        const formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: './php/upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function() {
                alert("Formulário enviado com sucesso!");
                location.reload();
            },
            error: function() {
                alert("Houve um erro ao enviar o formulário. Por favor, tente novamente.");
            }
        });
    }

    documentList.on('click', 'a', openDocumentInNewTab);
    viewFullScreen.click(fullScreen);
    departamento.change(handleDepartmentChange).trigger('change');
    interact('#document-container')
        .resizable({
            edges: { left: true, right: true, bottom: true, top: true }
        })
        .on('resizemove', handleResizeMove);
    uploadForm.submit(handleFormSubmission);
});
