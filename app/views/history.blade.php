@extends('layouts.main')
@section('content')

<H1>Balance: <?= $balance ?></H1>

    <div class="row">
        <div class="col-md-12">
        	<h1>Pagos con Transferencia</h1>
          	<table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Quinta</th>
                <th>Tipo de pago</th>
                <th>Banco</th>
                <th>Monto</th>
                <th>Nº de Confirmación</th>
                <th>Fecha de Pago</th>
                <th>Estado</th>
            </thead>	
            <tbody>
			    <?php $i = 1;?>
			    @foreach ($payments as $payment)
			    <tr>
			        <td><?= $i++?></td>
                    <td><?= $payment->house;?></td>
			        <td><?= $payment->type;?></td>
			        <td><?= $payment->bank;?></td>
			        <td><?= $payment->amount;?></td>
			        <td><?= $payment->confirmid;?></td>
			        <td><?= $payment->date;?></td>
			        <td><?= $payment->state;?></td>
			    </tr> 
			    @endforeach                                                                                   
            </tbody>
          </table>
        </div>
                
    </div>

@stop