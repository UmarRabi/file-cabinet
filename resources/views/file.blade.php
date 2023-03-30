<x-app-layout>
    <x-slot name="header">
        <h2 class="row justify-content-center bg-green font-semibold text-xl leading-tight">
            {{ __(ucfirst(Auth::user()->roles[0]->name) . ' Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .chat-window {
            bottom: 0;
            position: relative;
            min-width: fit-content
        }

        .chat-window>div>.panel {
            border-radius: 5px 5px 0 0;
        }

        .icon_minim {
            padding: 2px 10px;
        }

        .msg_container_base {
            background: #e5e5e5;
            margin: 0;
            padding: 0 10px 10px;
            max-height: 300px;
            overflow-x: hidden;
        }

        .top-bar {
            background: #666;
            color: white;
            padding: 10px;
            position: relative;
            overflow: hidden;
        }

        .msg_receive {
            padding-left: 0;
            margin-left: 0;
        }

        .msg_sent {
            padding-bottom: 20px !important;
            margin-right: 0;
        }

        .messages {
            background: white;
            padding: 10px;
            border-radius: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            max-width: 100%;
        }

        .messages>p {
            font-size: 13px;
            margin: 0 0 0.2rem 0;
        }

        .messages>time {
            font-size: 11px;
            color: #ccc;
        }

        .msg_container {
            padding: 10px;
            overflow: hidden;
            display: flex;
        }

        img {
            display: block;
            width: 100%;
        }

        .avatar {
            position: relative;
        }

        .base_receive>.avatar:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border: 5px solid #FFF;
            border-left-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0);
        }

        .base_sent {
            justify-content: flex-end;
            align-items: flex-end;
        }

        .base_sent>.avatar:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 0;
            border: 5px solid white;
            border-right-color: transparent;
            border-top-color: transparent;
            box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
        }

        .msg_sent>time {
            float: right;
        }



        .msg_container_base::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        .msg_container_base::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }

        .btn-group.dropup {
            position: fixed;
            left: 0px;
            bottom: 0;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="col-xl-8 col-md-8 col-sm-12" style="margin-top: 2%; overflow:scroll">
                    @if (Auth::user()->hasRole('customer'))
                        <div class="container d-flex justify-content-end">
                            <a href="{{ route('uplaod-form') }}" class="pull-right btn btn-primary btn-sm"
                                style="max-width: 80px;">Add <i class="fa fa-plus"></i></a>
                        </div>
                    @endif

                    <div class="row mx-5">
                        <div class="col-md-6 col-sm-12 mt-5">
                            File: {{ $file->name }}
                        </div>
                        <div class="col-md-6 col-sm-12 mt-5">
                            Description: {{ $file->description }}
                        </div>
                        <div class="col-md-6 col-sm-12 mt-5">
                            Status: {{ $file->status }}
                        </div>
                        @if (Auth::user()->hasAnyRole(['customer', 'admin']))
                            <div class="col-md-6 col-sm-12 mt-5">
                                Assigned To: {{ $file->assignedTo ? $file->assignedTo->name : '' }}
                            </div>
                        @endif

                        @if (Auth::user()->hasAnyRole(['user', 'admin']))
                            <div class="col-md-6 col-sm-12 mt-5">
                                Owner: {{ $file->client ? $file->client->name : '' }}
                            </div>
                            @if ($file->status == 'pending')
                                <div class="row">
                                    <a href="{{ route('approve', ['id' => $file->id]) }}" class="btn btn-primary">
                                        Approve
                                    </a>
                                </div>
                            @endif

                        @endif

                    </div>
                    @if (Auth::user()->hasRole('admin'))
                        <div class="row mt-5 mx-3">
                            <form action="{{ route('assign') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="control-label">Assign</label>
                                    <select name="user" id="" class="form-control">
                                        @foreach ($users as $user)
                                            <option {{ $user->id == $file->assigned_to ? 'selected' : '' }}
                                                value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="id" value="{{ $file->id }}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Assign
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endif

                </div>
                <div class="col-xl-4 col-md-4 col-sm-12">
                    <div class="container">
                        <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1">
                            <div class="col-xs-12 col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body msg_container_base">
                                        @foreach ($file->comments as $comment)
                                            @if (Auth::user()->id == $comment->user_id)
                                                <div class="row msg_container base_sent">
                                                    <div class="col-md-10 col-xs-10">
                                                        <div class="messages msg_sent">
                                                            <p>{{ $comment->comment }}</p>
                                                            <time
                                                                datetime="2009-11-13T20:00">{{ $comment->commentator->name }}
                                                                • {{ $comment->created_at }}</time>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-2 avatar">
                                                        <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                            class=" img-responsive ">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row msg_container base_receive">
                                                    <div class="col-md-2 col-xs-2 avatar">
                                                        <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                                                            class=" img-responsive ">
                                                    </div>
                                                    <div class="col-md-10 col-xs-10">
                                                        <div class="messages msg_receive">
                                                            <p>{{ $comment->comment }}</p>
                                                            <time
                                                                datetime="2009-11-13T20:00">{{ $comment->commentator->name }}
                                                                • {{ $comment->created_at }}</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="panel-footer">
                                        <form action="{{ route('comment', ['id' => $file->id]) }}" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <input id="btn-input" type="text" name="comment"
                                                    class="form-control input-sm chat_input"
                                                    placeholder="Write your message here..." />
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-cog"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span>
                                        Novo</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span>
                                        Invisivel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
