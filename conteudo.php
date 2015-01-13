<?php

require_once "conexao_bd.php";

$conteudo = array(

    array(
        'empresa',
        '<h1>Empresa</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et nisi vel enim tincidunt pulvinar nec ut mauris. Donec at tortor purus. Praesent quis metus in libero fermentum blandit at nec risus. Curabitur odio felis, vulputate varius felis id, congue malesuada arcu. Nam dolor augue, laoreet pharetra odio vel, maximus porta tellus. Nunc pulvinar pretium leo et vehicula. Pellentesque semper elementum lacus a aliquam. Nulla facilisi.

        Vestibulum in feugiat risus, malesuada semper est. Aliquam tempor quam sed aliquam tincidunt. Praesent pretium pharetra est at sollicitudin. Morbi id rhoncus nibh. Aliquam vitae purus erat. Morbi sed egestas justo, euismod elementum nunc. Pellentesque dapibus volutpat condimentum.

        Aenean vestibulum dui nisi, vitae vestibulum justo lacinia in. Maecenas rutrum nisi a mattis iaculis. Etiam sed lectus pellentesque, tincidunt ipsum sed, gravida nisi. Nullam auctor sit amet urna id viverra. Nulla erat urna, condimentum eu felis sed, fringilla interdum elit. Maecenas et augue a magna pharetra luctus. In porta lectus vitae magna rutrum dapibus. Nullam non vestibulum ipsum, finibus faucibus metus. Integer ac orci vel quam lobortis laoreet id et nisi. Aenean magna mi, convallis eget gravida a, auctor sit amet est. Sed gravida magna nisl, at tincidunt dui mattis sit amet. Morbi fermentum molestie augue id venenatis. Sed dui augue, aliquet vel tempor sit amet, dictum eu odio. Ut id massa egestas, tempor quam quis, congue diam. Phasellus tempus ante id interdum porttitor. Curabitur pellentesque, odio tristique congue tincidunt, sapien velit dapibus elit, et gravida libero libero sit amet odio.
    </p>'
    ),

    array(
    'contato',
    '<main>
            <h1>Contato</h1>
            <h2>
                Formulário de contato
            </h2>
            <p>
                Preencha o formulário corretamente, e entraremos em contato assim que possível.
            </p>
            <form action="form.php" name="form-de-contato" method="post">
                <fieldset>
                    <legend>Dados para contato</legend>
                        <label>Nome<br><input type="text" name="nome"></label>
                        <label>Endereço de email<br><input type="text" name="email"></label>
                        <label>Assunto<br><input type="text" name="assunto"></label>
                        <label>Mensagem<br><textarea name="mensagem"></textarea></label>
                        <input id="submit" type="submit" name="submit" value="Enviar" class="btn btn-primary">
                </fieldset>
            </form>
        </main>'
        ),

    array(
        'home',
        '<h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus vitae massa sit amet pharetra. Morbi eget finibus metus. Fusce vitae odio eget nibh pellentesque cursus. Integer non ante dignissim, blandit est et, porttitor mi. Nunc dolor mi, euismod in magna a, consequat sodales dui. Sed lobortis vel quam vitae congue. Morbi eget nulla mi. Vestibulum in maximus mauris, id eleifend quam.

        Aenean feugiat tortor ac lorem porta, quis rutrum quam facilisis. Vivamus convallis porttitor mollis. Praesent eu vestibulum velit. Sed nec risus sit amet tortor pellentesque lacinia. Morbi id ultrices elit, non tincidunt nibh. Sed lobortis semper leo, eget porttitor nulla venenatis pulvinar. Nulla euismod ante ut facilisis faucibus. Vivamus elementum ex nulla, quis luctus felis dictum eget. Praesent eu arcu vitae lectus ornare lobortis vitae sed diam. Ut condimentum vulputate est nec vehicula. Vestibulum aliquet at ante eu gravida. Nullam vehicula orci quis blandit luctus. Nullam lectus nulla, consequat et pharetra sit amet, fermentum tempor libero. Fusce eros justo, pharetra et lorem ac, malesuada ornare lacus. Ut libero nisi, tincidunt in quam eu, mattis mattis libero. Sed eget dui suscipit, egestas risus vitae, vestibulum dui.

        Integer eros urna, placerat in risus eu, hendrerit aliquam lectus. Integer convallis pellentesque feugiat. Morbi eu facilisis nisl, in tempus libero. Etiam risus arcu, vulputate eu enim quis, dictum fermentum quam. Nunc blandit sagittis felis, in vehicula enim fermentum suscipit. Etiam bibendum mauris quam, vitae iaculis urna semper eget. Suspendisse dapibus rhoncus nulla, at consectetur nunc convallis nec. Sed sit amet magna nec felis malesuada laoreet mattis non magna. Praesent malesuada eu leo sit amet ornare. Proin ut nibh et ipsum tincidunt hendrerit. Donec gravida leo in lacus porta, vel sollicitudin odio vestibulum. Cras vitae aliquam erat.
    </p>'
    ),

    array(
      'produtos',
        '<main>
        <h1>Produtos</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa tellus, pellentesque ut sollicitudin nec, malesuada in dolor. Fusce posuere, enim a imperdiet tempus, lectus nisl commodo ligula, non suscipit diam nisi at sem. Suspendisse ornare nibh eget imperdiet ornare. Curabitur efficitur, magna iaculis porta bibendum, justo metus vehicula lorem, facilisis lobortis neque nibh ut lorem. In vitae enim eget augue sodales elementum et sed lectus. Sed dictum, sapien tempus fermentum posuere, ligula neque vehicula diam, non condimentum lorem massa quis dolor. In mattis consectetur metus, vel eleifend velit. Mauris lobortis orci ac viverra ullamcorper. Nullam sed sagittis libero, fermentum finibus ante. In lobortis tortor ut nisi lacinia, vel egestas sem aliquet.

            Maecenas quis lectus gravida diam dapibus dignissim. Phasellus sed sem a lacus imperdiet ornare. In mollis tincidunt porta. Quisque malesuada orci et magna suscipit porttitor. In vel facilisis tortor. Donec sagittis lectus sit amet nisi tempor, at venenatis purus pulvinar. Sed id arcu libero.

            Morbi volutpat in ipsum id ornare. Nam leo lorem, porttitor vitae erat vitae, sodales vestibulum neque. Fusce ac sagittis elit. Suspendisse scelerisque volutpat libero sed pellentesque. Integer pellentesque dignissim elementum. Nam sit amet turpis maximus, lobortis ligula nec, suscipit tortor. Vestibulum eget dapibus magna, eget ornare dolor. Donec scelerisque mollis efficitur. Nam augue orci, dapibus nec posuere ac, interdum eget nisl. Praesent vel finibus eros. Aliquam ut congue odio, sit amet varius libero. Aliquam tincidunt quis ante non dictum. Praesent condimentum nec ante id aliquam.
        </p>
    </main>'
    ),

    array(
        'servicos',
        '<p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nisl vitae dolor fringilla euismod. Proin iaculis hendrerit iaculis. Morbi et urna in nisi condimentum pretium. Ut elementum at erat id congue. Quisque eleifend laoreet risus id efficitur. Maecenas arcu nibh, malesuada sed ultricies non, varius ut tellus. Vestibulum non dapibus felis, et dictum orci. Aliquam nisi elit, ultrices malesuada aliquam quis, lacinia vulputate magna. Donec eu orci eu dolor convallis blandit. Nunc ultrices ultricies nisl mollis sollicitudin. Pellentesque vestibulum eu nunc et consequat. Curabitur ultrices faucibus urna in iaculis. Duis vel dictum ligula, at aliquam nisl.

        Duis semper pulvinar ex at luctus. Etiam sit amet maximus orci, et egestas sapien. Curabitur sollicitudin enim ac odio semper volutpat. Vestibulum congue diam leo, sit amet consequat dui ultrices at. Mauris ultrices elit elementum tellus dictum commodo. Sed placerat odio non euismod volutpat. Donec posuere dictum malesuada. Duis sit amet accumsan sem, pulvinar egestas quam. Maecenas dapibus fringilla leo a pellentesque. Fusce consectetur iaculis est, sit amet ultrices arcu varius sed. Nulla vitae diam vulputate, euismod libero commodo, bibendum nisl. Vivamus ut feugiat ante. Integer hendrerit elementum elit eget ullamcorper. Donec molestie suscipit dignissim.

        Sed molestie lacus nec egestas rhoncus. Donec justo neque, congue sed placerat vitae, elementum eget tortor. Aenean tempus quis lectus vel tempus. Nulla non quam quis nisi cursus finibus at euismod justo. Morbi scelerisque mi in rutrum venenatis. Nam ultrices lorem et purus dignissim, eu tempus leo scelerisque. Nunc a cursus dolor. Nulla vitae velit lectus. Maecenas laoreet, nulla sed lacinia pulvinar, urna dolor viverra sapien, et placerat erat est in nibh. Aliquam vulputate non turpis facilisis molestie. Cras pulvinar orci urna, a mattis dolor mattis a.
    </p>'
    )

);