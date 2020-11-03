@extends('master.layout')
@section('content')
    <main role="main">

       <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{ route('home') }}>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Documentação</li>
                </ol>
            </nav>
           <div class="alert alert-success" role="alert">
               <h4 class="alert-heading">Getting Started Guide!</h4>
               <p>Este guia é para orientar o uso da API RESTFul, de forma que o cliente possa usar da melhor maneira possivel.</p>
               <hr>
               <p class="mb-0"><li>Os EndPoint que usam autenticação serão informados com JWT Token.</li></p>
           </div>

           <div class="card">
               <div class="card-header">
                   <h5 class="card-title">Registro de Úsuario</h5>
               </div>
               <div class="card-body">

                   <p class="card-text"><b>URL: </b>api/auth/register</p>
                   <p class="card-text"><b>Method:</b> <span class="badge badge-primary">POST</span></p>
                   <p class="card-text"><b>Parameters:</b> (Body - JSON)
                       <p>
                           <ul class="list-group list-group-horizontal-md">
                               <li class="list-group-item">name</li>
                               <li class="list-group-item">email</li>
                               <li class="list-group-item">password</li>
                           </ul>
                       </p>
                   </p>
                   <p class="card-text"><b>Returns: </b>
                        <p>
                           <li>200 <span class="badge badge-success">Success</span></li>
                            <li>400 <span class="badge badge-danger">Bad Request</span></li>
                       </p>
                   <p>Ex.: Success</p>
                   <code class="language-js" data-lang="js">
                       {
                           "created": {
                           "name": "...",
                           "email": "...",
                           "updated_at": "...",
                           "created_at": "...",
                           "id": ...
                           }
                       }
                   </code>
                   </p>

               </div>
           </div>

           <div class="card mt-4">
               <div class="card-header">
                   <h5 class="card-title">Login de Úsuario</h5>
               </div>
               <div class="card-body">

                   <p class="card-text"><b>URL: </b>api/auth/login</p>
                   <p class="card-text"><b>Method:</b> <span class="badge badge-primary">POST</span></p>
                   <p class="card-text"><b>Parameters:</b> (Body - JSON)
                   <p>
                   <ul class="list-group list-group-horizontal-md">

                       <li class="list-group-item">email</li>
                       <li class="list-group-item">password</li>
                   </ul>
                   </p>
                   </p>
                   <p class="card-text"><b>Returns: </b>
                   <p>
                   <li>200 <span class="badge badge-success">Success</span></li>
                   <li>400 <span class="badge badge-danger">Bad Request</span></li>
                   <li>401 <span class="badge badge-warning">Authorized</span></li>
                   </p>
                   <p>Ex.: Success</p>
                   <code class="language-js" data-lang="js">
                       {
                       "access_token": "...",
                       "token_type": "bearer",
                       "expires_in": 3600
                       }
                   </code>
                   </p>

               </div>
           </div>

           <div class="card mt-4">
               <div class="card-header">
                   <h5 class="card-title">Registro de Evento</h5>
               </div>
               <div class="card-body">

                   <p class="card-text"><b>URL: </b>api/event/create</p>
                   <p class="card-text"><b>Method:</b> <span class="badge badge-primary">POST</span></p>
                   <p class="card-text"><b>Parameters:</b>
                        <li>(Headers - authorization bearer Token)</li>
                       <li>(Body - JSON)</li>
                   <p>
                   <ul class="list-group list-group-horizontal-md">

                       <li class="list-group-item">name</li>
                       <li class="list-group-item">date</li>
                       <li class="list-group-item">category</li>
                       <li class="list-group-item">description</li>
                   </ul>
                   </p>
                   </p>
                   <p class="card-text"><b>Returns: </b>
                   <p>
                   <li>200 <span class="badge badge-success">Success</span></li>
                   <li>400 <span class="badge badge-danger">Bad Request</span></li>
                   <li>401 <span class="badge badge-warning">Authorized</span></li>
                   </p>

               </div>
           </div>

           <div class="card mt-4">
               <div class="card-header">
                   <h5 class="card-title">Registro de Ingresso</h5>
               </div>
               <div class="card-body">

                   <p class="card-text"><b>URL: </b>api/ticket/create</p>
                   <p class="card-text"><b>Method:</b> <span class="badge badge-primary">POST</span></p>
                   <p class="card-text"><b>Parameters:</b>
                   <li>(Headers - authorization bearer Token)</li>
                   <li>(Body - JSON)</li>
                   <p>
                   <ul class="list-group list-group-horizontal-md">

                       <li class="list-group-item">name</li>
                       <li class="list-group-item">value</li>
                       <li class="list-group-item">sector</li>
                       <li class="list-group-item">event_id</li>
                   </ul>
                   </p>
                   </p>
                   <p class="card-text"><b>Returns: </b>
                   <p>
                   <li>200 <span class="badge badge-success">Success</span></li>
                   <li>400 <span class="badge badge-danger">Bad Request</span></li>
                   <li>401 <span class="badge badge-warning">Authorized</span></li>
                   </p>

               </div>
           </div>

           <div class="card mt-4 mb-4">
               <div class="card-header">
                   <h5 class="card-title">Listagem de Evento e os Ingressos</h5>
               </div>
               <div class="card-body">

                   <p class="card-text"><b>URL: </b>api/event/list</p>
                   <p class="card-text"><b>Method:</b> <span class="badge badge-primary">GET</span></p>
                   <p class="card-text"><b>Parameters:</b>
                        <li>(Headers - authorization bearer Token)</li>

                   </p>
                   <p class="card-text"><b>Returns: </b>
                   <p>
                   <li>200 <span class="badge badge-success">Success</span></li>
                   <li>400 <span class="badge badge-danger">Bad Request</span></li>
                   <li>401 <span class="badge badge-warning">Authorized</span></li>
                   </p>

               </div>
           </div>

       </div>

    </main>

@endsection
