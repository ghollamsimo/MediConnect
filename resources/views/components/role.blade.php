    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an Role</label>
    <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="patient" selected>Patient</option>
        <option value="Medecin">Medecin
        </option>
    </select>

    <select id="Specialiter" name="Specialiter" class="bg-gray-50 border mt-4 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach($specialiters as $specialiter)
            <option value="{{ $specialiter->id }}">{{ $specialiter->specialiter}}</option>
        @endforeach
    </select>








<script src="/js/script.js"></script>
