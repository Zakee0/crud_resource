{{-- <table>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->address}}</td>
        </tr>
    @endforeach
</table>

<h1>Hello </h1>
@foreach ($names as $name)
<h1>{{ $name }}</h1>
    
@endforeach

middleware

global , group , and private need to register in kernal

use Illuminate\Support\Facades\DB;
 db query

 to save a file
 $req->file("file")->store('img')
 enctype = multitype form data

 use $timestamps = false , if want to avoid updated and created at 

 to create new entry in db when user fills the form
  public function adddata(Request $req){

        $member = new member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('add');

    }

    session
     public function userlogin(Request $req){
      $data = $req->input('user');
      $req->session()->put('user',$data);
      return redirect('profile');
    }

// Route::view('/url',"page");

joins 
function getdata(){
        return DB::table('employee')
        ->join('company','employee.id', '=' , 'company.employee_id')
        ->get();
    } --}}