@extends('layouts.app')

@section('content')

<style>
  .tasks-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-family: Arial, sans-serif;
  }

  .tasks-table th,
  .tasks-table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
  }

  .tasks-table .status-column,
  .tasks-table .title-column,
  .tasks-table .description-column,
  .tasks-table .date-column,
  .tasks-table .actions-column {
    font-weight: bold;
  }

  .text-center {
    text-align: center;
  }

  .status-pending {
    background-color: #f9f9f9; /* Couleur de fond pour les tâches en attente */
  }

  .status-overdue {
    background-color: #ffcccc; /* Couleur de fond pour les tâches en retard */
  }

  .task-action-icon {
    margin-right: 10px;
    font-size: 18px;
    color: #333;
    transition: color 0.3s ease;
  }

  .task-action-icon:hover {
    color: #007bff;
  }

  .task-action-icon i {
    margin: 0;
  }

  .task-action-icon .fa-check {
    color: green;
  }

  .task-action-icon .fa-times {
    color: red;
  }

  .task-action-icon .fa-trash {
    color: red;
  }

  .task-action-icon .fa-edit {
    color: #ff9900;
  }

  .status-column input[type="checkbox"] {
    cursor: pointer;
  }

  .status-column input[type="checkbox"]:disabled {
    cursor: not-allowed;
  }

  .date-column {
    color: #555;
  }
</style>

<table class="tasks-table">
  <thead>
    <tr>
      <th class="status-column">Statut</th>
      <th class="title-column">Titre</th>
      <th class="description-column">Description</th>
      <th class="date-column">Date Limite</th>
      <th class="actions-column">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($tasks as $task)
    @if($task->statut == 0)
    <tr class="status-pending">
    @elseif($task->date_fin < date('Y-m-d'))
    <tr class="status-overdue">
    @else
    <tr>
    @endif
      <td class="text-center">
        @if($task->statut)
          <input type="checkbox" disabled>
        @else
          <input type="checkbox" checked disabled>
        @endif
      </td>
      <td>{{ $task->titre }}</td>
      <td> {{ $task->description }}</td>
      <td class="text-center">
        {{ $task->date_fin }}
        @if($task->date_fin < date('Y-m-d'))
          ({{ date_diff(date_create($task->date_fin), date_create(date('Y-m-d')))->format('%a') }} jours)
        @endif
      </td>
      <td class="text-center">
        <span><a href="/edit-task/{{ $task->id }}" class="task-action-icon"><i class="fa-solid fa-edit"></i></a></span>
        <span><a href="/delete-task/{{ $task->id }}" class="task-action-icon"><i class="fa-solid fa-trash" style="color:red;"></i></a></span>
        
        <span><a href="/task-statut/{{ $task->id }}/{{ $task->statut }}" class="task-action-icon">
          @if($task->statut)
          <i class="fa-solid fa-check" style="color:green;"></i>
          @else
          <i class="fa-solid fa-times" style="color:red;"></i>
          @endif
        </a></span>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
