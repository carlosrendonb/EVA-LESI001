
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/misestilos.css"/>
    <style>
        .card-header{
            background-color:rgba(43, 45, 61, 0.97);

        }
        .card-header button{
            color:white;
        }
        .card-header button:hover{
            color:white;
        }
    </style>
    <title></title>
  </head>
  <body>
        
    <br>
    <br>
    <div class="title-cards" style="padding:20px 0px 0px;">
      <h1>
          <a class="logo" style="color:#138496;">
                  <i class="btn-link2 fas fa-biohazard">LESI</i>
              </a> 
        </h1></div>
    <div class="title-cards">
      <h2>SEGURIDAD EN LA CONECTIVIDAD Y SISTEMAS</h2>
	</div>

    <div id="accordion" style="width: 97%; padding: 10px 60px;">
    <div class="card">
        <div class="card-header" id="headingOne">
        <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5>Tarea 1 - Introducción</h5>
            </button>
        </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body row">
            <div class="borde col-sm-12 col-md-2"></div>
            <div class="borde col-sm-12 col-md-3"><a href=""><img src="assets/img/redes.jpg" alt="me"/></a></div>
            <div class="borde col-sm-12 col-md-5">
          <h3>Introducción a la creación de redes </h3>
          El objetivo de esta sala es proporcionar una introducción para principiantes a los principios básicos de la creación de redes. La creación de redes es un  tema enorme , por lo que en realidad será solo una breve descripción general; sin embargo, es de esperar que le proporcione algunos conocimientos básicos sobre el tema, que podrá desarrollar por sí mismo .
          
          </div>
          </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5>Tarea 2 -  El modelo OSI: una descripción general</h5>
            </button>
        </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10"><p>El modelo de interconexión de sistemas abiertos por sus siglas en ingles OSI (Open Systems Interconnection), es un modelo estandarizado que se utiliza para demostrar la teoría detrás de las redes de computadoras. En la práctica, es en realidad el modelo TCP / IP más compacto en el que se basan las redes del mundo real; sin embargo, es más fácil obtener una comprensión inicial del modelo OSI, en muchos sentidos.</p></div> 
            </div>
            <hr>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
           
              <h4>El modelo OSI consta de siete capas:</h4><br>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-2"><a href=""><img src="assets/img/OSI.png" alt="me"/></a></div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 7 - Aplicación</h4>
                    <p>La capa de aplicación del modelo OSI esencialmente proporciona opciones de red a los programas que se ejecutan en una computadora. Funciona casi exclusivamente con aplicaciones, proporcionando una interfaz que pueden utilizar para transmitir datos. Cuando los datos se entregan a la capa de aplicación, se transmiten a la capa de presentación.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 6 - Presentación</h4>
                    <p>La capa de presentación recibe datos de la capa de aplicación. Estos datos tienden a estar en un formato que la aplicación comprende, pero no necesariamente en un formato estandarizado que pueda ser entendido por la capa de aplicación en la  computadora receptora . La capa de presentación traduce los datos a un formato estandarizado, además de manejar cualquier cifrado, compresión u otras transformaciones de los datos. Con esto completo, los datos se pasan a la capa de sesión.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 5 - Sesión</h4>
                    <p>Cuando la capa de sesión recibe los datos con el formato correcto de la capa de presentación, busca si puede establecer una conexión con la otra computadora a través de la red. Si no puede, envía un error y el proceso no continúa. Si una sesión puede establecerse, entonces es el trabajo de la capa de sesión mantenerlo, así como cooperar con la capa de sesión de la computadora remota para sincronizar las comunicaciones. La capa de sesión es particularmente importante ya que la sesión que crea es única para la comunicación en cuestión. Esto es lo que le permite realizar múltiples solicitudes a diferentes puntos finales simultáneamente sin que se mezclen todos los datos (piense en abrir dos pestañas en un navegador web al mismo tiempo). Cuando la capa de sesión ha registrado con éxito una conexión entre el host y la computadora remota, los datos se transmiten a la Capa 4: la Capa de transporte.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 4 - Transporte</h4>
                    <p>La capa de transporte es una capa muy interesante que cumple numerosas funciones importantes. Su primer propósito es elegir el protocolo por el que se transmitirán los datos. Los dos mayoría de los protocolos comunes en la capa de transporte son TCP ( Transmission Control Protocol) y UDP ( USer Datagram Protocol); con TCP, la transmisión se basa en la conexión, lo que significa que se establece y se mantiene una conexión entre las computadoras durante la duración de la solicitud. Esto permite una transmisión confiable, ya que la conexión se puede utilizar para garantizar que todos los paquetes llegar al lugar correcto. Una conexión TCP permite que las dos computadoras permanezcan en comunicación constante para garantizar que los datos se envíen a una velocidad aceptable y que los datos perdidos se reenvíen. Con UDP, ocurre lo contrario; Los paquetes de datos se lanzan esencialmente a la computadora receptora; si no puede mantener el ritmo, ese es su problema (es por eso que una transmisión de video a través de algo como Skype se puede pixelar si la conexión es mala). Lo que esto significa es que normalmente se elegiría TCP para situaciones en las que se favorece la precisión sobre la velocidad (por ejemplo, transferencia de archivos o carga de una página web), y UDP se utilizaría en situaciones en las que la velocidad es más importante (por ejemplo, transmisión de video).</p>
                    <p>Con un protocolo seleccionado, la capa de transporte luego divide la transmisión en partes del tamaño de un bocado (a través de TCP se les llama segmentos , a través de UDP se les llama datagramas ), lo que facilita la transmisión del mensaje con éxito. </p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 3 - Red:</h4>
                    <p>La capa de red se encarga de localizar el destino de su solicitud. Por ejemplo, Internet es una red enorme; cuando desea solicitar información de una página web, es la capa de red la que toma la dirección IP de la página y determina la mejor ruta a seguir. En esta etapa, estamos trabajando con lo que se conoce como direccionamiento lógico (es decir, direcciones IP) que todavía están controladas por software. Las direcciones lógicas se utilizan para ordenar las redes, categorizarlas y permitirnos ordenarlas adecuadamente. Actualmente, la forma más común de direccionamiento lógico es el formato IPV4, con el que probablemente ya esté familiarizado (es decir, 192.168.1.1 es una dirección común para un enrutador doméstico).</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 2 - Enlace de datos</h4>
                    <p>La capa de enlace de datos se centra en el direccionamiento físico de la transmisión. Recibe un paquete de la capa de red (que incluye la dirección IP de la computadora remota) y agrega la dirección física (MAC) del punto final receptor. I Nside cada red ordenador habilitado es un  Network  Interface  Card (NIC) que viene con un MAC única ( Media  Access  Control) dirección para identificarlo.</p>
                    <p>Las direcciones MAC son establecidas por el fabricante y literalmente grabadas en la tarjeta; no se pueden cambiar, aunque se  pueden  falsificar. Cuando se envía información a través de una red, en realidad es la dirección física la que se utiliza para identificar dónde exactamente enviar la información.</p>
                    <p>Además, también es trabajo de la capa de enlace de datos presentar los datos en un formato adecuado para la transmisión.</p>
                    <p>La capa de enlace de datos también cumple una función importante cuando recibe datos, ya que verifica la información recibida para asegurarse de que no se haya corrompido durante la transmisión, lo que bien podría suceder cuando los datos son transmitidos por la capa 1: la capa física.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                  <h4>Capa 1 - Física</h4>
                    <p>La capa física se reduce al hardware de la computadora. Aquí es donde se envían y reciben los pulsos eléctricos que componen la transferencia de datos a través de una red. El trabajo de la capa física es convertir los datos binarios de la transmisión en señales y transmitirlos a través de la red, así como recibir señales entrantes y convertirlas nuevamente en datos binarios.</p>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <h2>Responda las siguientes preguntas</h2>
                <p>¿Qué capa elegiría enviar datos a través de TCP o UDP?</p> 
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                
                <p>¿Qué capa verifica los paquetes recibidos para asegurarse de que no se hayan dañado?</p> 
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                
                <p>¿En qué capa se formatearían los datos en preparación para la transmisión?</p> 
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                
                <p>¿Qué capa transmite y recibe datos?</p> 
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                
                <p>¿Qué capa cifra, comprime o transforma los datos iniciales para darle un formato estandarizado?</p> 
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5>Tarea 3 - Encapsulamiento</h5>
            </button>
        </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
                <p>A medida que los datos se transmiten por cada capa del modelo, al inicio de la transmisión se agrega más información que contiene detalles específicos de la capa en cuestión. Como ejemplo, el encabezado agregado por la capa de red incluiría cosas como las direcciones IP de origen y destino, y el encabezado agregado por la capa de transporte incluiría (entre otras cosas) información específica del protocolo que se está utilizando. La capa de enlace de datos también agrega una parte al  final  de la transmisión, que se utiliza para verificar que los datos no se hayan corrompido durante la transmisión; esto también tiene la ventaja adicional de una mayor seguridad, ya que los datos no pueden ser interceptados y manipulados sin romper el tráiler. Todo este proceso se denomina  encapsulación; el proceso mediante el cual los datos se pueden enviar de una computadora a otra.</p>
              </div>
            </div>
            <hr>
            
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-7"><a href=""><img src="assets/img/encapsulamiento.jpeg" alt="me"/></a></div>
              </div>
            </div>
            
            
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Observe que los datos encapsulados reciben un nombre diferente en diferentes pasos del proceso. En las capas 7, 6 y 5, los datos se denominan simplemente datos. En la capa de transporte, los datos encapsulados se denominan segmento o datagrama (dependiendo de si se ha seleccionado TCP o UDP como protocolo de transmisión). En la capa de red, los datos se denominan paquete. Cuando el paquete pasa a la capa de enlace de datos, se convierte en una trama y, cuando se transmite a través de una red, la trama se ha dividido en bits.</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p  style="padding: 0px 20px;">Cuando el mensaje es recibido por la segunda computadora, invierte el proceso, comenzando en la capa física y trabajando hasta llegar a la capa de aplicación, eliminando la información agregada a medida que avanza. Esto se conoce como  desencapsulación. Como tal, puede pensar que las capas del modelo OSI existen dentro de cada computadora con capacidades de red. Si bien en la práctica no es tan claro, todas las computadoras siguen el mismo proceso de encapsulación para enviar datos y desencapsularlos al recibirlos.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Los procesos de encapsulación y desencapsulación son muy importantes, no solo por su uso práctico, sino también porque nos brindan un método estandarizado para enviar datos. Esto significa que todas las transmisiones seguirán constantemente la misma metodología, lo que permitirá que cualquier dispositivo habilitado para la red envíe una solicitud a cualquier otro dispositivo accesible y se asegure de que se entenderá, independientemente de que sean del mismo fabricante; utilizar el mismo sistema operativo; o cualquier otro factor.</p>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <h2  style="padding: 0px 20px;">Responda las siguientes preguntas</h2>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p  style="padding: 0px 20px;">¿Cuál es el nombre de la función cuyo trabajo es identificar ataques contra una organización?</p> 
              </div>
            </div>
            <div class="row" style="padding: 0px 20px;">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <input type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
          </div>
        
    </div>

    <div class="card">
        <div class="card-header" id="headingFour">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5>Tarea 4 -  El modelo TCP / IP</h5>
            </button>
        </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div> 
              <div class="borde col-sm-12 col-md-10">
                <p>El modelo TCP / IP es, en muchos sentidos, muy similar al modelo OSI. Es unos años más antiguo y sirve como base para la creación de redes en el mundo real. El modelo TCP / IP consta de cuatro capas: aplicación, transporte, Internet e interfaz de red. Entre ellos, cubren la misma gama de funciones que las siete capas del modelo OSI.</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-3"><a href=""><img src="assets/img/tcpip.png" alt="me"/></a></div>
                
            </div>
            </div>

            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Se justificaría preguntar por qué nos molestamos con el modelo OSI si en realidad no se usa para nada en el mundo real. La respuesta a esa pregunta es simplemente que el modelo OSI (debido a que es menos condensado y más rígido que el modelo TCP / IP) tiende a ser más fácil para aprender la teoría inicial de las redes.</p>
              </div>
            </div>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Los dos modelos coinciden con algo como esto:</p>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-2"></div>
              
              <div class="borde col-sm-12 col-md-2"><a href=""><img src="assets/img/osi-tcpip.png" alt="me"/></a></div>
                
            </div>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Los procesos de encapsulación y desencapsulación funcionan exactamente de la misma manera con el modelo TCP / IP que con el modelo OSI. En cada capa del modelo TCP / IP se agrega un encabezado durante la encapsulación y se elimina durante la desencapsulación.</p>
              </div>
            </div>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Ahora vayamos al lado práctico de las cosas.</p>
              </div>
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Un modelo en capas es excelente como ayuda visual: nos muestra el proceso general de cómo se pueden encapsular y enviar los datos a través de una red, pero ¿cómo sucede realmente?</p>
              </div>
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Cuando hablamos de TCP/IP, está muy bien pensar en una tabla con cuatro capas, pero en realidad estamos hablando de un conjunto de protocolos: conjuntos de reglas que definen cómo se llevará a cabo una acción. TCP/IP toma su nombre de los dos más importantes de estos: el Transmission Control Protocol (que se habló anteriormente en el modelo OSI) que controla el flujo de datos entre dos puntos finales, y la Internet Protocol, que controla cómo se direccionan y envían los paquetes. Hay muchos más protocolos que componen la suite TCP/IP; cubriremos algunos de estos en tareas posteriores. Por ahora, sin embargo, hablemos de TCP.</p>
              </div>
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Como se mencionó anteriormente, TCP es un protocolo basado en conexión. En otras palabras, antes de enviar datos a través de TCP, primero debe formar una conexión estable entre las dos computadoras. El proceso de formación de esta conexión se denomina apretón de manos de tres vías.</p>
              </div>
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">Cuando intenta establecer una conexión, su computadora primero envía una solicitud especial al servidor remoto indicando que desea inicializar una conexión. Esta solicitud contiene algo llamado SYN (abreviatura de sincronizar), que esencialmente hace el primer contacto al iniciar el proceso de conexión. El servidor responderá con un paquete que contiene el bit SYN, así como otro bit de "reconocimiento", llamado ACK. Finalmente, su computadora enviará un paquete que contiene el bit ACK por sí mismo, confirmando que la conexión se ha configurado correctamente. Con el protocolo de enlace de tres vías completado con éxito, los datos se pueden transmitir de manera confiable entre las dos computadoras. Todos los datos que se pierden o se corrompen en la transmisión se reenvían, lo que conduce a una conexión que parece no tener pérdidas.</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-4"><a href=""><img src="assets/img/tres.png" alt="me"/></a></div>
                
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">No vamos a entrar exactamente en cómo  funciona esto paso a paso, al menos no en esta sala. Es suficiente saber que el protocolo de enlace de tres vías debe llevarse a cabo antes de que se pueda establecer una conexión mediante TCP.</p>
              </div>
            </div>

            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <h4>Historia</h4>
                <p style="padding: 0px 20px;">Es importante comprender exactamente por qué se crearon originalmente los modelos TCP/IP y OSI. Al principio no había estandarización: los diferentes fabricantes seguían sus propias metodologías y, en consecuencia, los sistemas hechos por diferentes fabricantes eran completamente incompatibles cuando se trataba de redes. El modelo TCP/IP fue introducido por el Departamento de Defensa estadounidense en 1982 para proporcionar un estándar, algo que deben seguir todos los diferentes fabricantes. Esto resolvió los problemas de inconsistencia. Más tarde, el modelo OSI también fue introducido por la Organización Internacional de Normalización (ISO); sin embargo, se utiliza principalmente como una guía más completa para el aprendizaje, ya que el modelo TCP/IP sigue siendo el estándar en el que se basan las redes modernas.</p>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <h2>Responda las siguientes preguntas</h2>
                <p style="padding: 0px 20px;">¿Qué modelo se introdujo primero, OSI o TCP/IP?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué capa del modelo TCP / IP cubre la funcionalidad de la capa de transporte del modelo OSI (nombre completo) ?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué capa del modelo TCP / IP cubre la funcionalidad de la capa de sesión del modelo OSI (nombre completo)?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué tipo de protocolo es TCP?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Cuál es el nombre corto del segmento "Reconocimiento" en el protocolo de enlace de tres vías?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>

        </div>
        
    </div>
    
    <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              <h5>Tarea 5 -  Herramientas de redes Ping</h5>
              </button>
          </h5>
        </div>
        
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body row">
            <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p>En esta etapa, es de esperar que toda la teoría haya tenido sentido y ahora comprenda los modelos básicos detrás de las redes de computadoras. Durante el resto de la sala, veremos algunas de las herramientas de red de línea de comandos que podemos usar en aplicaciones prácticas. Muchas de estas herramientas funcionan en otros sistemas operativos, pero en aras de la simplicidad, voy a asumir que está ejecutando Linux por el resto de esta sala. La primera herramienta que veremos será elping comando.</p> 
                </div>
            </div>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">El comando ping se usa cuando queremos probar si es posible una conexión a un recurso remoto. Por lo general, este será un sitio web en Internet, pero también podría ser para una computadora en su red doméstica si desea verificar si está configurado correctamente. Ping funciona con el protocolo ICMP, que es uno de los protocolos TCP / IP ligeramente menos conocidos que se mencionaron anteriormente. El protocolo ICMP funciona en la capa de red del modelo OSI y, por lo tanto, en la capa de Internet del modelo TCP / IP. La sintaxis básica de ping es <a style="background-color: black; color:cornsilk; padding:0px 10px;">ping (target)</a>. En este ejemplo, usamos ping para probar si es posible una conexión de red a Google:</p>

                </div>
            </div>
          
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-10"><a href=""><img style="padding: 0px 20px 20px" src="assets/img/ping1.png" alt="me"/></a></div>
                
            </div>

            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Observe que el comando ping en realidad devolvió la dirección IP del servidor de Google al que se conectó, en lugar de la URL solicitada. Esta es una práctica aplicación secundaria para hacer ping, ya que se puede utilizar para determinar la dirección IP del servidor que aloja un sitio web. Una de las grandes ventajas del ping es que es prácticamente omnipresente en cualquier dispositivo habilitado para la red. Todos los sistemas operativos lo admiten desde el primer momento, ¡e incluso la mayoría de los dispositivos integrados pueden usar ping!</p>

                </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <h2>Responda las siguientes preguntas</h2>
                <p style="padding: 0px 20px;">¿Qué comando usaría para hacer ping al sitio web bbc.co.uk?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué intenta determinar un usuario a la hora de emitir un comando ping (ip) en un PC?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="Radios1" value="option1" checked="true">
                  <label class="form-check-label" for="Radios1">
                  Si hay conectividad con el dispositivo de destino 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="Radios2" value="option2">
                  <label class="form-check-label" for="Radios2">
                  Qué tipo de dispositivo está en el destino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="Radios3" value="option3">
                  <label class="form-check-label" for="Radios3">
                  Si la pila TCP / IP está funcionando en el PC sin poner el tráfico en el cable
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="Radios4" value="option4">
                  <label class="form-check-label" for="Radios4">
                  La ruta que el tráfico se tardará en llegar a su destino
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>

            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué...?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Qué...?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                <input  type="text" placeholder="Respuesta">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
            <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10">
                <p style="padding: 0px 20px;">¿Cuál...?</p>
              </div>
            </div>

            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>

        </div>
    </div>

    <div class="card">
        <div class="card-header" id="headingSix">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <h5>Tarea 6 -  Herramientas de redes Traceroute</h5>
            </button>
        </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
          <div class="card-body row">
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p>El seguimiento lógico del comando ping es 'traceroute'. Traceroute se puede utilizar para mapear la ruta que toma su solicitud cuando se dirige a la máquina de destino.</p> 
            </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Internet se compone de muchos, muchos servidores y puntos finales diferentes, todos conectados entre sí. Esto significa que, para obtener el contenido que realmente desea, primero debe pasar por otros servidores. Traceroute le permite ver cada una de estas conexiones; le permite ver cada paso intermedio entre su computadora y el recurso que solicitó. La sintaxis básica de traceroute en Linux es la siguiente: <a style="padding: 0px 10px; background-color: black; color: white;">traceroute [ip destino]</a></p>

                </div>
          </div>
           
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">De forma predeterminada, la utilidad traceroute de Windows (tracert) funciona con el mismo protocolo ICMP que utiliza ping, y el equivalente de Unix funciona a través de UDP. Esto se puede modificar con interruptores en ambos casos.</p>

                </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-10"><a href=""><img style="padding: 0px 20px 20px" src="assets/img/tracer.png" alt="me"/></a></div>
                
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Se Puede observar que se necesitaron 13 saltos para pasar de mi enrutador ( _gateway) al servidor de Google en 216.58.205.46</p>

                </div>
          </div>

          <hr>
          <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <h2>Responda las siguientes preguntas</h2>
              <p style="padding: 0px 20px;">¿Qué...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Qué...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Qué...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Qué...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Qué...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>

        </div>
      
    </div>
    <div class="card">
        <div class="card-header" id="headingSeven">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <h5>Tarea 7 -  Herramientas de redes WHOIS</h5>
            </button>
        </h5>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
        <div class="card-body row">
        <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p>Nombres de dominio: los salvadores anónimos de Internet.</p> 
            </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">¿Se imagina cómo se sentiría recordar la dirección IP de cada sitio web que desea visitar? Pensamiento horrible.</p>

                </div>
          </div>
           
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Afortunadamente, tenemos dominios.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Hablaremos un poco más sobre cómo funciona esto en la próxima tarea, pero por ahora basta con saber que un dominio se traduce en una dirección IP para que no necesitemos recordarlo (por ejemplo, puede escribir tryhackme.com, en lugar de la dirección IP de TryHackMe). Los dominios son alquilados por empresas denominadas registradores de dominios. Si desea un dominio, vaya y regístrese con un registrador, luego arriende el dominio por un período de tiempo determinado.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Whois esencialmente le permite consultar a quién está registrado un nombre de dominio. En Europa, los datos personales están redactados; sin embargo, en otros lugares puede obtener potencialmente una gran cantidad de información de una búsqueda whois.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Nota: es posible que deba instalar whois antes de usarlo. En sistemas basados ​​en Debian, esto se puede hacer con <a style="background-color: black; color:white; padding: 0px 10px;">sudo apt update && sudo apt-get install whois</a></p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Las búsquedas de Whois son muy fáciles de realizar. Solo use <a style="background-color: black; color:white; padding:0px 10px">whois [domain]</a> para obtener una lista de la información disponible sobre el registro de dominio:</p>

                </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-6"><a href=""><img style="padding: 0px 20px 20px" src="assets/img/whois.png" alt="me"/></a></div>
                
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Esta es, comparativamente, una cantidad muy pequeña de información que a menudo se puede encontrar. Tenga en cuenta que tenemos el nombre de dominio, la empresa que registró el dominio, la última renovación y la próxima fecha de vencimiento, y un montón de información sobre servidores de nombres.</p>

                </div>
          </div>

          <hr>
          <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <h2>Responda las siguientes preguntas</h2>
              <p style="padding: 0px 20px;">Realice una búsqueda whois en facebook.com</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Cuál es el código postal del registrante para facebook.com?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Cuándo se registró por primera vez el dominio facebook.com?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">Realice una búsqueda whois en microsoft.com</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿En qué ciudad se encuentra el registrante?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingEigth">
        <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
            <h5>Tarea 8 -  Herramientas de redes Dig</h5>
            </button>
        </h5>
        </div>
        <div id="collapseEigth" class="collapse" aria-labelledby="headingEigth" data-parent="#accordion">
        <div class="card-body row">
        <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p>Hablamos de dominios en la tarea anterior; ahora hablemos de cómo funcionan.</p> 
            </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">¿Alguna vez se preguntó cómo se convierte una URL en una dirección IP que su computadora pueda entender? La respuesta es un protocolo TCP/IP llamado DNS (Domain Name System).</p>

                </div>
          </div>
           
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">En el nivel más básico, DNS nos permite pedirle a un servidor especial que nos dé la dirección IP del sitio web al que intentamos acceder. Por ejemplo, si hiciéramos una solicitud a www.google.com, nuestra computadora enviaría primero una solicitud a un servidor DNS especial (que su computadora ya sabe cómo encontrar). Luego, el servidor buscaría la dirección IP de Google y nos la enviaría. Luego, nuestra computadora podría enviar la solicitud a la IP del servidor de Google.</p>

                </div>
               
          </div>
          <hr>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Analicemos esto un poco.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Realiza una solicitud a un sitio web. Lo primero que hace su computadora es verificar su caché local para ver si ya tiene una dirección IP almacenada para el sitio web; si lo hace, genial. Si no es así, pasa a la siguiente etapa del proceso.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Suponiendo que aún no se haya encontrado la dirección, su computadora enviará una solicitud a lo que se conoce como un  servidor DNS recursivo . Estos serán conocidos automáticamente por el enrutador en su red. Muchos proveedores de servicios de Internet (ISP) mantienen sus propios servidores recursivos, pero empresas como Google y OpenDNS también controlan los servidores recursivos. Así es como su computadora sabe automáticamente dónde enviar la solicitud de información: los detalles de un servidor DNS recursivo se almacenan en su enrutador. Este servidor también mantendrá un caché de resultados para dominios populares; sin embargo, si el sitio web que ha solicitado no está almacenado en la caché, el servidor recursivo pasará la solicitud a un  servidor de nombres raíz.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Antes de 2004 había precisamente 13 servidores DNS de nombres raíz en el mundo. En estos días hay muchos más; sin embargo, todavía se puede acceder a ellos utilizando las mismas 13 direcciones IP asignadas a los servidores originales (equilibradas para que obtenga el servidor más cercano cuando realice una solicitud). Los servidores de nombres raíz esencialmente realizan un seguimiento de los servidores DNS en el siguiente nivel hacia abajo, eligiendo uno apropiado para redirigir su solicitud. Estos servidores de nivel inferior se denominan  servidores de dominio de nivel  superior.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Los servidores de dominio de nivel superior (TLD) se dividen en extensiones. Entonces, por ejemplo, si estuviera buscando tryhackme .com, su solicitud se redirigirá a un servidor de TLD que maneja <a style="background-color: black; color:white; padding: 0px 10px;">.com</a>  dominios. Si estaba buscando bbc .co.uk, su solicitud sería redirigida a un servidor TLD que maneja <a style="background-color: black; color:white; padding: 0px 10px;"> .co.uk</a> dominios. Al igual que con los servidores de nombres raíz, los servidores de TLD realizan un seguimiento del siguiente nivel: servidores de nombres autorizados . Cuando un servidor de TLD recibe su solicitud de información, el servidor la transmite a un servidor de nombres autorizado apropiado.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Los servidores de nombres autorizados se utilizan para almacenar registros DNS de dominios directamente. En otras palabras, todos los dominios del mundo tendrán sus registros DNS almacenados en un servidor de nombres autorizado en algún lugar u otro; son la fuente de la información. Cuando su solicitud llegue al servidor de nombres autorizado para el dominio que está consultando, le enviará la información relevante, lo que le permitirá a su computadora conectarse a la dirección IP detrás del dominio que solicitó.</p>

                </div>
          </div>
          <hr>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Cuando visita un sitio web en su navegador web, todo esto sucede automáticamente, pero también podemos hacerlo manualmente con una herramienta llamada <a style="background-color: black; color:white; padding: 0px 10px;">dig</a>. Al igual que ping y traceroute, dig debería instalarse automáticamente en los sistemas Linux.</p>

                </div>
          </div>
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Dig nos permite consultar manualmente los servidores DNS recursivos de nuestra elección para obtener información sobre dominios:
                    <a style="background-color: black; color:white; padding: 0px 10px;">dig [domain] @[dns-server-ip]</a></p>

                </div>
          </div>
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Es una herramienta muy útil para solucionar problemas de red.</p>

                </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-5"><a href=""><img style="padding: 0px 20px 20px" src="assets/img/dig.png" alt="me"/></a></div>
                
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Esta es mucha  información. Actualmente estamos más interesados ​​en la <a style="background-color: black; color:white; padding: 0px 10px;">ANSWER</a> sección de esta sala; sin embargo, es una muy buena idea tomarse el tiempo para aprender qué significa el resto de esto. En resumen, esa información nos dice que le enviamos una consulta y con éxito (es decir, sin errores) recibimos una respuesta completa, que, como se esperaba, contiene la dirección IP del nombre de dominio que consultamos.</p>

                </div>
          </div>

          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Otro dato interesante que nos da excavación es el TTL ( Tiempo To Live) del registro DNS consultado. Como se mencionó anteriormente, cuando su computadora consulta un nombre de dominio, almacena los resultados en su caché local. El TTL del registro le dice a su computadora cuándo dejar de considerar el registro como válido, es decir, cuándo debe solicitar los datos nuevamente, en lugar de depender de la copia en caché.</p>

                </div>
          </div>
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">El TTL se puede encontrar en la segunda columna de la sección de respuestas:</p>

                </div>
          </div>
          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              
              <div class="borde col-sm-12 col-md-5"><a href=""><img style="padding: 0px 20px 20px" src="assets/img/ttl.png" alt="me"/></a></div>
                
          </div>
          <div class="row" >
              <div class="borde col-sm-12 col-md-1"></div>
                <div class="borde col-sm-12 col-md-10">
                  <p style="padding: 0px 20px;">Es importante recordar que TTL (en el contexto del almacenamiento en caché de DNS) se mide en segundos, por lo que el registro del ejemplo caducará en dos minutos y treinta y siete segundos.</p>

                </div>
          </div>

          <hr>
          <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <h2>Responda las siguientes preguntas</h2>
              <p style="padding: 0px 20px;">¿Cuál significa la abreviatura de DNS?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta1" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Cuál es el primer tipo de servidor DNS que su computadora consultaría cuando busca un dominio?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta2" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Qué tipo de servidor DNS contiene registros específicos de extensiones de dominio (es decir , .com, .co.uk *, etc.) *? Utilice la versión larga del nombre.</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta3" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Dónde es el primer lugar donde buscaría su computadora para encontrar la dirección IP de un dominio?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta4" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
          <div class="row" >
            <div class="borde col-sm-12 col-md-1"></div>
            <div class="borde col-sm-12 col-md-10">
              <p style="padding: 0px 20px;">¿Que...?</p>
            </div>
          </div>

          <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 0px 0px 0px 40px;">
                
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio 1
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio 2 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios3" value="option3">
                  <label class="form-check-label" for="exampleRadios3">
                    Default radio 3
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="pregunta5" id="exampleRadios4" value="option4">
                  <label class="form-check-label" for="exampleRadios4">
                    Default radio 4
                  </label>
                </div>
                <!--
                <div class="form-check disabled">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>-->
              </div>
            </div>
            <div class="row">
              <div class="borde col-sm-12 col-md-1"></div>
              <div class="borde col-sm-12 col-md-10" style="padding: 20px 0px 0px 40px;">
                <a style="color:aliceblue;" class="botonBuscar">Enviar</a>
              </div>
            </div>
            <hr>
            <hr>
        </div>
    </div>
    </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

