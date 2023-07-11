<h1>CORONARY HEART DISEASE DIAGNOSIS </h1>
<table border="1">
<tr>
        <td>Id</td>
        <td>Name</td>
        <td>Location</td>
        <td>Phone_number</td>
        
    </tr>
@foreach($patients as $patient)
<tr>
        <td>{{$patient['Id']}}</td>
        <td>{{$patient['Name']}}</td>
        <td>{{$patient['Location']}}</td>
        <td>{{$patient['Phone_number']}}</td>
        

        </td>
    </tr>
    @endforeach
</table>

<span> 
    {{$patients->links()}}
</span>

<style>
    .w-5{
        display: none
    }
</style>