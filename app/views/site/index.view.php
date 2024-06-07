<html lang="pt">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
      rel="stylesheet"
    />
    <script
      defer
      src="https://kit.fontawesome.com/10f37f7ffb.js"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina de Publicações_Admin</title>
    <link rel="stylesheet" href="/public/css/ModalEdicaoPost.css" />
  </head>
  <body>
    <div id="telaBloqueadora"></div>
    <div id="BlocoDaListaDePosts">
      <div class="back">
        <div class="cont_user">
          <p class="title_user">Lista de Posts</p>
          <button
            class="bt_create"
            onclick="abrirModal('DivFormularioCriacaoDePost',1)"
          >
            Criar Post
          </button>
        </div>
        <div class="cont_tab">
          <table>
            <thead>
              <tr class="header_tab">
                <th class="header_id">ID</th>
                <th>Usuário</th>
                <th>Post</th>
                <th class="header_ac">Ação</th>
              </tr>
            </thead>
            <tbody>

              <tr class="body_tab">
                <td>1</td>
                <td>Wayne</td>
                <td>Novo filme do batmana</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',1)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',1)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',1)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>2</td>
                <td>Miguel</td>
                <td>Nova HQ</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',2) "
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',2) "
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',2) "
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>3</td>
                <td>Wayne</td>
                <td>seraaa@gotham.com</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',3)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',3)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',3)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>4</td>
                <td>Bernado</td>
                <td>Melhores episódios da Liga da justiça</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',4)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',4)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',4)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>5</td>
                <td>Wayne</td>
                <td>....</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',5)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',5)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',5)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <table>
            <thead>
              <tr class="header_tab">
                <th class="header_id">ID</th>
                <th>Usuário</th>
                <th>Post</th>
                <th class="header_ac">Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr class="body_tab">
                <td>3</td>
                <td>Renan</td>
                <td>Novo filme da liga da justiça</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',1)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',1)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',1)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>7</td>
                <td>Marlon</td>
                <td>The flash ep 08 s1</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',2) "
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',2) "
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',2) "
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>11</td>
                <td>Alfred</td>
                <td>bla e bla</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',3)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',3)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',3)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>24</td>
                <td>Luis</td>
                <td>Mulher gavião é o melhor personagem</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',4)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',4)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',4)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
              <tr class="body_tab">
                <td>9</td>
                <td>Wayne</td>
                <td>not_batman@gotham.com</td>
                <td>
                  <button
                    class="bt_vis"
                    onclick="abrirModal('DivFormularioVisualizacaoDePost',5)"
                  >
                    <i class="fa-regular fa-eye"></i
                    ><span class="stx">Visualizar</span>
                  </button>
                  <button
                    class="bt_edit"
                    onclick="abrirModal('DivFormularioEdicaoDePost',5)"
                  >
                    <i class="fa-regular fa-pen-to-square"></i
                    ><span class="stx">Editar</span>
                  </button>
                  <button
                    class="bt_delete"
                    onclick="abrirModal('DivConfirmacaoExclusaoPostForm',5)"
                  >
                    <i class="fa-regular fa-trash-can"></i
                    ><span class="stx">Excluir</span>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="paginacao">
            <button onclick="troca_relativa(-1)" class="seta_pag1">
              <i class="fa-solid fa-angles-left"></i>
            </button>
            <a href="#1" class="num_pag">1</a>
            <a href="#2" class="num_pag">2</a>
            <button onclick="troca_relativa(+1)" class="seta_pag2">
              <i class="fa-solid fa-angles-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

<!-- Modal Visulizar -->

      <div class="BlocoPost" id="DivFormularioVisualizacaoDePost">
        <form class="formA" id="FormularioVisualizacaoDePost">
          <h2>VISUALIZAR POST</h2>
          <section class="IDpostForm">
            <h3>ID:</h3>
            <p>1</p>
          </section>
          <section class="TituloPostForm">
            <h3>Título:</h3>
            <p>DC: A ORIGEM</p>
          </section>
          <section class="ConteudoPostForm">
            <h3>Conteúdo:</h3>
            <p>
              Texto informativo contando a história de origem da DC COMICS,
              desde os primórdios, e como a empresa se tornou o que é hoje.
            </p>
          </section>
          <section class="ImagemDoPostFormV">
            <h3>Imagem:</h3>
            <img
              src="/public/assets/BatmanPorvisórioPost.jpg"
              alt="Imagem do Batman do Futuro, com fundo de lua cheia em céu roxo"
            />
          </section>
          <section class="DataDeCriacaoPostForm">
            <h3>Data de criação:</h3>
            <p>07/05/2024</p>
          </section>
          <section class="NomeDoAutorPostForm">
            <h3>Autor:</h3>
            <p>Lex Luthor</p>
          </section>
          <div class="BotoesFormularios">
            <button
              class="Botao1Formulario"
              onclick="fecharModal('DivFormularioVisualizacaoDePost')"
            >
              FECHAR
            </button>
          </div>
        </form>
      </div>

<!-- Modal Excluir -->

      <div class="BlocoPost" id="DivConfirmacaoExclusaoPostForm">
        <form class="formA" id="ConfirmacaoExclusaoPostForm">
          <h2>EXCLUIR POST</h2>
          <p>
            ATENÇÃO! Após a conclusão dessa ação, não será possível
            desfazê-la.<br />Tem certeza que deseja excluir esse post
            PERMANENTEMENTE?
          </p>
          <div class="BotoesFormularios">
            <button
              class="Botao1Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm')"
            >
              EXCLUIR
            </button>
            <button
              class="Botao2Formulario"
              onclick="fecharModal('DivConfirmacaoExclusaoPostForm')"
            >
              CANCELAR
            </button>
          </div>
        </form>
      </div>

<!-- Modal Criar -->

      <div class="BlocoPost" id="DivFormularioCriacaoDePost">
      <form class="formA" id="FormularioCriacaoDePost">
        <h2>CRIAR POST</h2>
        <section class="TituloPostForm">
          <h3>Título:</h3>
          <input type="text" placeholder="Digite o título do post aqui" />
        </section>
        <section class="ConteudoPostForm">
          <h3>Conteúdo:</h3>
          <textarea
            rows="7"
            placeholder="Digite o conteúdo do post aqui"
          ></textarea>
          >
        </section>
        <section class="ImagemDoPostForm">
          <h3>Imagem:</h3>
          <label class="LabelBotaoDeArquivo"
            ><span>Escolher imagem do post: <br /></span>
          </label>
          <input
            type="file"
            id="EscolhaImagem1"
            accept="image/png, image/jpeg"
            multiple
          />
        </section>
        <section class="DataDeCriacaoPostForm">
          <h3>Data de criação:</h3>
          <p>07/05/2024</p>
        </section>
        <section class="NomeDoAutorPostForm">
          <h3>Autor:</h3>
          <p>Lex Luthor</p>
        </section>
        <div class="BotoesFormularios">
          <button
            class="Botao1Formulario"
            onclick="fecharModal('DivFormularioCriacaoDePost')"
          >
            CRIAR
          </button>
          <button
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioCriacaoDePost')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>

<!-- Modal Editar -->

      <div class="BlocoPost" id="DivFormularioEdicaoDePost">
      <form class="formA" id="FormularioEdicaoDePost">
        <h2>EDITAR POST</h2>
        <section class="TituloPostForm">
          <h3>Título:</h3>
          <input type="text" />
        </section>
        <section class="ConteudoPostForm">
          <h3>Conteúdo:</h3>
          <textarea rows="7"></textarea>
        </section>
        <section class="ImagemDoPostForm">
          <h3>Imagem:</h3>
          <label class="LabelBotaoDeArquivo" for="EscolhaImagem2" tabindex="0">
            <span>Editar imagem do post: <br /></span>
          </label>
          <input type="file" id="EscolhaImagem2" />
        </section>
        <section class="DataDeCriacaoPostForm">
          <h3>Data de criação:</h3>
          <p>07/05/2024</p>
        </section>
        <section class="NomeDoAutorPostForm">
          <h3>Autor:</h3>
          <p>Lex Luthor</p>
        </section>
        <div class="BotoesFormularios">
          <button
            class="Botao1Formulario"
            onclick="fecharModal('DivFormularioEdicaoDePost')"
          >
            SALVAR
          </button>
          <button
            class="Botao2Formulario"
            onclick="fecharModal('DivFormularioEdicaoDePost')"
          >
            CANCELAR
          </button>
        </div>
      </form>
      </div>
  </body>
  <script src="/public/js/paginacaoA.js"></script>
  <script src="/public/js/funcoesModal.js"></script>
</html>