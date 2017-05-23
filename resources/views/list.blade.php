@extends('layout')

@section('content')
    <div class="tab-content" style="width: 1000px">
        <h2>List of articles</h2>
        <h3>Number of articles: {{$count}}</h3>
        <div style="float: left; margin-right: 100px">
            <form action="create">
                 <input type="submit" value="Create new Article">
             </form>
        </div>
        <div style="float: left"></div>
        <div id = "paging" style="float: left; padding-right: 200px">
            Select number of articles per page:
            <form id="formPerPage">
                <select id="selectPerPage" name="limit">
                    <option value="10"></option>
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                </select>
            </form>
        </div>
        <div style="clear: both"></div>
        <hr>
        <table>
            <thead>
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>TITLE</strong></td>
                    <td><strong>CONTENT</strong></td>
                </tr>
            </thead>
            <tbody>
             @foreach($articles as $article)
                 <tr>
                     <td>{{$article->id}}</td>
                     <td>{{$article->title}}</td>
                     <td>{{$article->content}}</td>
                     <td><a href="{{'articles/'.$article->id}}">READ</a></td>
                     <td><a href="{{'articles/edit/'.$article->id}}">EDIT</a></td>
                     <td>
                         <form action="{{'delete/'.$article->id}}">
                            <input type="submit" value="Delete">
                         </form>
                     </td>
                 </tr>

            @endforeach;
            </tbody>
        </table>
        <hr>
    </div>

    <script type="text/javascript"  src="https://code.jquery.com/jquery-3.2.1.slim.js"></script>
    <script>
        $(document).ready(function () {

            $("#selectPerPage").on("change", function() {

                $("#formPerPage").submit();
            })
        });

    </script>
@endsection

