<x-socialmedia-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Social Media') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white  shadow-xl sm:rounded-lg">
				<div class="grid gap-4 grid-cols-2">
					<div>
						<a href="{{ route('youtube.index') }}">
							YouTube
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</x-socialmedia-layout>