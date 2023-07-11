<h1> Graphs & Reports </h1>
<table border="1">
@foreach($data as $item)

<tr>
        <td>{{$item->Id}}</td>
        <td>{{$item->Name}}</td>
        <td>{{$item->Location}}</td>
        <td>{{$item->Phone_number}}</td>
        

        </td>
    </tr>
    @endforeach
</table>

<!-- <span>
    
</span>

<style>
    .w-5{
        display: none
    }
</style> -->