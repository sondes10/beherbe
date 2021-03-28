@extends("layouts.master")


@section("title")
dashboard | funda of web it
@endsection



@section("content")

<div class="row">
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                      <tr>
                        <td>
                          {{$client->firstname}
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                    @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
</div>
@endsection


@section("scripts")

@endsection