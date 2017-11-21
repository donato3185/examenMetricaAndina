    <div class="container top">

      <div class="page-header users-header">
        <h2>Developers SAC</h2>
        <h3>Listado</h3>
      </div>

      <div class="row">
        <div class="span12 columns">

          <div class="well">

            <?php
              //echo "data" ."<br/>";
              //print_r($listaDevelopers);

              $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
              echo form_open('/', $attributes);

                echo form_label('Filtro:', 'search_string');
                echo form_input('search_string', $search_string_selected, 'style="width: 170px; height: 26px;"');

                $data_submit = array('name' => 'submit', 'class' => 'btn btn-primary', 'value' => 'Buscar');
                $data_reset = array('name' => 'reset', 'class' => 'btn btn-primary', 'value' => 'Reestablecer');
                echo form_submit($data_submit);
                echo '    <a style="width: 100px;" href="appJson" >Reestablecer</a>';

              echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header headerSortDown">NAME</th>
                <th class="header">EMAIL</th>
                <th class="header">POSITION</th>
                <th class="header">SALARY</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($listaDevelopers as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['email'].'</td>';
                echo '<td>'.$row['position'].'</td>';
                echo '<td>'.$row['salary'].'</td>';
                /*
                echo '<td>'.$row->name.'</td>';
                echo '<td>'.$row->email.'</td>';
                echo '<td>'.$row->position.'</td>';
                echo '<td>'.$row->salary.'</td>';
                */
                echo '</tr>';
              }
              ?>
            </tbody>
          </table>

      </div>
    </div>