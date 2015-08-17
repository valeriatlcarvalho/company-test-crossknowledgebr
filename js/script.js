$(function(){
    lista();
});

$('#submit').on( 'click', function(){
    var acao = $(this).val();

    if (acao == 'salvar') {
        $.ajax({
            method: 'POST',
            url: './ajax/cadastro.php',
            data: $('#formulario').serialize(),
            dataType: 'json',
            success: function(retorno){
               
                console.log('ajax: cadastrou novo');
                // Se cadastrou, refaz a listagem de pessoas (atualizada)
                lista();
            },
            error: function(err){
                console.log('ajax: não cadastrou');
            }
        });
    }
    else if (acao == 'editar') {
        var form = $('#formulario');
        var id = form.children('input[name=id]').val();
        var row = $('tr.row-'+id);

        // Reescreve a linha da tabela que foi editada conforme os valores dos campos do formulário
        row.children('td.nome').replaceWith( '<td class="nome">'+form.children('div').children('input[name=nome]').val()+'</td>' );
        row.children('td.sobrenome').replaceWith( '<td class="sobrenome">'+form.children('div').children('input[name=sobrenome]').val()+'</td>' );
        row.children('td.logradouro').replaceWith( '<td class="logradouro">'+form.children('div').children('div').children('input[name=logradouro]').val()+'</td>' );
        row.children('td.bairro').replaceWith( '<td class="bairro">'+form.children('div').children('div').children('input[name=bairro]').val()+'</td>' );
        row.children('td.cidade').replaceWith( '<td class="cidade">'+form.children('div').children('div').children('input[name=cidade]').val()+'</td>' );
        row.children('td.estado').replaceWith( '<td class="estado">'+form.children('div').children('div').children('input[name=estado]').val()+'</td>' );

        $.ajax({
            method: 'POST',
            url: './ajax/edita.php',
            data: $('#formulario').serialize(),
            dataType: 'json',
            success: function(data){
                console.log('ajax: editou');
            },
            error: function(){
                console.log('ajax: não editou');
            }
        });

        $(this).val('salvar').text('Salvar');
        $(this).removeClass('editar').addClass('salvar');
    }

    // Apaga os dados do formulário :: retorna ao estado inicial
    $('#formulario')[0].reset();
    return false;
});

lista = function(){
    $.ajax({
        method: 'POST',
        url: './ajax/listagem.php',
        dataType: 'json',
        success: function(data){
            // `data` retorna um array JSON
            console.log('ajax: listando pessoas');
            console.log(data);

            var tbody = $('tbody');
            tbody.html('');
            $.each(data.pessoas, function(k, v){
                // Preenche corpo da tabela com os registros retornados do banco de dados (tabela `pessoas`)
                tbody.append('<tr class="row-'+v.id+'"> <td>'+v.id+'</td> <td class="nome">'+v.nome+'</td> <td class="sobrenome">'+v.sobrenome+'</td> <td class="logradouro">'+v.logradouro+'</td> <td class="bairro">'+v.bairro+'</td> <td class="cidade">'+v.cidade+'</td> <td class="estado">'+v.estado+'</td> <td class="editar"><a href="#editar='+v.id+'" onclick="edita('+v.id+')"></a></td> <td class="excluir"><a href="#excluir='+v.id+'" onclick="exclui('+v.id+')"></a></td> </tr>');
            });
        },
        error: function(err){
            console.log('ajax: listagem vazia');
        }
    });
}

edita = function(id) {
    var row = $('tr.row-'+id);
    
    // Cria um objeto com todas as informações da pessoa seleciona (a partir da linha da tabela)
    var pessoa = {};
    pessoa.nome        = row.children('td.nome').text();
    pessoa.sobrenome   = row.children('td.sobrenome').text();
    pessoa.logradouro  = row.children('td.logradouro').text();
    pessoa.bairro      = row.children('td.bairro').text();
    pessoa.cidade      = row.children('td.cidade').text();
    pessoa.estado      = row.children('td.estado').text();

    // Cria
    var campo = $('#formulario div');
    
    $('#formulario').children('input[name=id]').val(id);
    campo.children('input[name=nome]').val(pessoa.nome);
    campo.children('input[name=sobrenome]').val(pessoa.sobrenome);
    campo.children('input[name=logradouro]').val(pessoa.logradouro);
    campo.children('input[name=bairro]').val(pessoa.bairro);
    campo.children('input[name=cidade]').val(pessoa.cidade);
    campo.children('input[name=estado]').val(pessoa.estado);
    campo.children('button[name=acao]').val('editar').text('Editar').removeClass('salvar').addClass('editar');
    
    console.log('edita(): '+id);
};

exclui = function(id){
    var row = $('tr.row-'+id);

    $.ajax({
        url: './ajax/exclui.php',
        method: 'POST',
        data: {"id": id},
        dataType: 'json',
        success: function(data){
            // Mostra o `id` do registro que foi excluído
            console.log('exclui(): '+data);
            row.replaceWith('');
        }
    });
};