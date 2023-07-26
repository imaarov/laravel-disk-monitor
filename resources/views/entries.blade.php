<h1>Disk Metrics</h1>

<table>
	<thead>
		<tr>
			<th>Disk Name</th>
			<th>File Count</th>
			<th>Recorded At</th>
		<tr/>
	</thead>
	<tbody>
		@foreach($entries as $entry)
		<tr>
			<td>{{ $entry->disk_name }}</td>
			<td>{{ $entry->file_count }}</td>
			<td>{{ $entry->created_at->format('Y-m-d H:i:s') }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
