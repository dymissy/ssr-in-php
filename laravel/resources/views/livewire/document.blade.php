<div class="max-w-7xl mx-auto px-6 py-10">
    <!-- Document Info -->
    <x-document.document-info :document="$document"/>

    <!-- Language Table -->
    <div class="bg-white rounded shadow">
        <div class="flex justify-between items-center px-6 py-4 border-b">
            <h3 class="font-semibold text-gray-800">Languages</h3>
            <a href="#" class="text-blue-600 text-sm font-bold">+ Add languages</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead>
                <tr class="bg-gray-100 text-left text-gray-600">
                    <th class="px-6 py-3"></th>
                    <th class="px-6 py-3">Language</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Progress</th>
                    <th class="px-6 py-3">Translators</th>
                    <th class="px-6 py-3"></th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-t">
                    <td class="px-6 py-4"><input type="checkbox" /></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://flagcdn.com/24x18/nl.png" class="w-5 h-3" alt="Dutch flag" />
                            <div class="text-blue-600 font-bold">Dutch</div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs font-bold">
                        <span class="text-green-700 bg-green-100 px-2 py-0.5 rounded">Confirmed</span>
                    </td>
                    <td class="px-6 py-4">

                        <div class="w-32 flex items-center gap-2">
                            <div class="w-full h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-green-500 rounded-full" style="width: 100%;"></div>
                            </div>
                            <div class="text-xs text-gray-500 font-bold whitespace-nowrap">100%</div>
                        </div>

                    </td>
                    <td class="px-6 py-4">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/32?img=16" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=32" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=51" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=36" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=34" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                        </div>
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="bg-blue-100 text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Confirm</button>
                        <button class="bg-blue-100 text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Download</button>
                    </td>
                </tr>
                <tr class="border-t">
                    <td class="px-6 py-4"><input type="checkbox" /></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <img src="https://flagcdn.com/24x18/de.png" class="w-5 h-3" alt="German flag" />
                            <div class="text-blue-600 font-bold">German</div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs font-bold">
                        <span class="text-gray-600 bg-gray-100 px-2 py-0.5 rounded">Downloaded</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="w-32 flex items-center gap-2">
                            <div class="w-full h-2 bg-gray-200 rounded-full">
                                <div class="h-2 bg-yellow-400 rounded-full" style="width: 42%;"></div>
                            </div>
                            <div class="text-xs text-gray-500 font-bold whitespace-nowrap">42%</div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex -space-x-2">
                            <img src="https://i.pravatar.cc/32?img=36" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=52" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                            <img src="https://i.pravatar.cc/32?img=11" class="w-8 h-8 rounded-full border-2 border-white" alt="Translator" />
                        </div>
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <button class="bg-blue-100 cursor-hand text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Confirm</button>
                        <button class="bg-blue-100 text-blue-600 border rounded-xl cursor-pointer hover:border-blue-700 text-sm px-5 py-2 font-bold">Download</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


