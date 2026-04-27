@extends('layouts.admin')

@section('title', 'Manajemen Chatbot')

@section('content')
    <div x-data="{
        activeTab: 'knowledge',
        showCreateKnowledge: false,
        showEditKnowledge: false,
        showViewLead: false,
        editKnowledgeData: { id: '', topic: '', intent_name: '', keywords: '', response: '' },
        viewLeadData: { ip_address: '', topic_context: '', contact_info: '', last_message: '', chat_history: [], status: '' },
    
        openEditKnowledge(item) {
            this.editKnowledgeData = { ...item };
            this.showEditKnowledge = true;
        },
        openViewLead(lead) {
            this.viewLeadData = { ...lead };
            // Pastikan chat_history ter-parse jika dikirim sebagai string JSON
            if (typeof lead.chat_history === 'string') {
                try {
                    this.viewLeadData.chat_history = JSON.parse(lead.chat_history);
                } catch (e) {
                    this.viewLeadData.chat_history = [];
                }
            }
            this.showViewLead = true;
        }
    }" x-cloak>

        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-8 space-y-4 md:space-y-0">
            <div>
                <h2 class="text-xl md:text-2xl font-extrabold text-[#0f172a]">Pusat Kendali Chatbot</h2>
                <div class="flex mt-3 bg-slate-100 p-1 rounded-xl w-fit border border-slate-200">
                    <button @click="activeTab = 'knowledge'"
                        :class="activeTab === 'knowledge' ? 'bg-white shadow-sm text-blue-600' :
                            'text-slate-500 hover:text-slate-700'"
                        class="px-4 py-1.5 rounded-lg text-sm font-bold transition">Knowledge Base</button>
                    <button @click="activeTab = 'leads'"
                        :class="activeTab === 'leads' ? 'bg-white shadow-sm text-blue-600' :
                            'text-slate-500 hover:text-slate-700'"
                        class="px-4 py-1.5 rounded-lg text-sm font-bold transition">Chatbot Leads</button>
                </div>
            </div>

            <template x-if="activeTab === 'knowledge'">
                <button @click="showCreateKnowledge = true"
                    class="bg-[#0f172a] hover:bg-slate-800 text-white px-5 py-2.5 rounded-xl text-sm font-bold transition shadow-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Pengetahuan
                </button>
            </template>
        </div>

        {{-- TAB 1: KNOWLEDGE BASE --}}
        <div x-show="activeTab === 'knowledge'" x-transition>
            <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[700px]">
                        <thead class="bg-slate-50 border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Topik &
                                    Intent</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Keywords
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Respons AI
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-right">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse ($knowledges as $item)
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-bold text-slate-700">{{ $item->topic }}</div>
                                        <div class="text-[10px] text-blue-500 font-mono">{{ $item->intent_name }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-xs text-slate-600 bg-slate-100 px-2 py-1 rounded">{{ $item->keywords }}</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-xs text-slate-500 line-clamp-2 max-w-xs">{{ $item->response }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end space-x-2">
                                            <button @click="openEditKnowledge({{ $item->toJson() }})"
                                                class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                onclick="confirmDelete('{{ $item->id }}', 'knowledge')"
                                                class="p-2 text-rose-600 hover:bg-rose-50 rounded-lg transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <form id="delete-knowledge-{{ $item->id }}"
                                                action="{{ route('admin.chatbot.knowledge.destroy', $item->id) }}"
                                                method="POST" class="hidden">
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic">Belum ada data
                                        knowledge base.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- TAB 2: LEADS --}}
        <div x-show="activeTab === 'leads'" x-transition>
            <div class="bg-white border border-slate-100 rounded-2xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[700px]">
                        <thead class="bg-slate-50 border-b border-slate-100">
                            <tr>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Kontak & IP
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider">Konteks
                                    Topik</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-center">
                                    Status</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-400 uppercase tracking-wider text-right">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse ($leads as $lead)
                                <tr class="hover:bg-slate-50/50 transition">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-bold text-slate-700">
                                            {{ $lead->contact_info ?? 'Anonymous' }}</div>
                                        <div class="text-[10px] text-slate-400 italic">{{ $lead->ip_address }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-xs text-slate-600">{{ Str::limit($lead->topic_context, 50) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <span
                                            class="px-2 py-1 rounded-full text-[10px] font-bold {{ $lead->status == 'closed' ? 'bg-slate-100 text-slate-600' : 'bg-green-50 text-green-600' }}">
                                            {{ strtoupper($lead->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end items-center space-x-3">
                                            <button @click="openViewLead({{ $lead->toJson() }})"
                                                class="text-blue-600 text-xs font-bold hover:underline">Lihat Chat</button>
                                            <button type="button" onclick="confirmDelete('{{ $lead->id }}', 'leads')"
                                                class="text-rose-600 hover:text-rose-800 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <form id="delete-leads-{{ $lead->id }}"
                                                action="{{ route('admin.chatbot.leads.destroy', $lead->id) }}"
                                                method="POST" class="hidden">
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-slate-400 italic">Belum ada
                                        leads masuk.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- MODAL: CREATE KNOWLEDGE --}}
        <div x-show="showCreateKnowledge"
            class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
            x-transition>
            <div @click.away="showCreateKnowledge = false"
                class="bg-white rounded-2xl shadow-xl w-full max-w-2xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <h3 class="font-bold text-slate-800">Tambah Pengetahuan Baru</h3>
                    <button @click="showCreateKnowledge = false"
                        class="text-slate-400 hover:text-slate-600 text-2xl">&times;</button>
                </div>
                <form action="{{ route('admin.chatbot.knowledge.store') }}" method="POST" class="p-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Topik</label>
                            <input type="text" name="topic" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Intent Name (slug)</label>
                            <input type="text" name="intent_name" required placeholder="misal: tanya_harga"
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Keywords (Pisahkan dengan
                                koma)</label>
                            <input type="text" name="keywords" required placeholder="harga, biaya, bayar"
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Respons Chatbot</label>
                            <textarea name="response" rows="4" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition"></textarea>
                        </div>
                    </div>
                    <div class="flex space-x-3 mt-6">
                        <button type="button" @click="showCreateKnowledge = false"
                            class="flex-1 px-4 py-2.5 rounded-xl bg-slate-100 text-slate-600 font-bold hover:bg-slate-200 transition">Batal</button>
                        <button type="submit"
                            class="flex-1 px-4 py-2.5 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-md transition">Simpan
                            Pengetahuan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- MODAL: EDIT KNOWLEDGE --}}
        <div x-show="showEditKnowledge"
            class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm"
            x-transition>
            <div @click.away="showEditKnowledge = false"
                class="bg-white rounded-2xl shadow-xl w-full max-w-2xl overflow-hidden">
                <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <h3 class="font-bold text-slate-800">Edit Pengetahuan</h3>
                    <button @click="showEditKnowledge = false"
                        class="text-slate-400 hover:text-slate-600 text-2xl">&times;</button>
                </div>
                {{-- Form action menggunakan template string Alpine --}}
                <form :action="'{{ url('admin/chatbot/knowledge') }}/' + editKnowledgeData.id" method="POST"
                    class="p-6">
                    @csrf @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Topik</label>
                            <input type="text" name="topic" x-model="editKnowledgeData.topic" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Intent Name</label>
                            <input type="text" name="intent_name" x-model="editKnowledgeData.intent_name" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Keywords</label>
                            <input type="text" name="keywords" x-model="editKnowledgeData.keywords" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Respons Chatbot</label>
                            <textarea name="response" x-model="editKnowledgeData.response" rows="4" required
                                class="w-full px-4 py-2 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                        </div>
                    </div>
                    <div class="flex space-x-3 mt-6">
                        <button type="button" @click="showEditKnowledge = false"
                            class="flex-1 px-4 py-2.5 rounded-xl bg-slate-100 text-slate-600 font-bold hover:bg-slate-200 transition">Batal</button>
                        <button type="submit"
                            class="flex-1 px-4 py-2.5 rounded-xl bg-blue-600 text-white font-bold hover:bg-blue-700 shadow-md transition">Update
                            Pengetahuan</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- MODAL: VIEW LEAD CHAT --}}
        <div x-show="showViewLead"
            class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" x-transition
            x-cloak>
            <div @click.away="showViewLead = false"
                class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden flex flex-col max-h-[90vh]">

                <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <div>
                        <h3 class="font-bold text-slate-800" x-text="viewLeadData.contact_info || 'Detail Chat'"></h3>
                        <p class="text-[10px] text-slate-400" x-text="'IP: ' + viewLeadData.ip_address"></p>
                    </div>
                    <button @click="showViewLead = false"
                        class="text-slate-400 hover:text-slate-600 text-2xl">&times;</button>
                </div>

                <div class="p-6 overflow-y-auto space-y-4 bg-slate-100/50 flex-1 min-h-[400px]">
                    <template x-for="(chat, index) in viewLeadData.chat_history" :key="index">
                        <div :class="chat.sender === 'user' ? 'flex justify-end' : 'flex justify-start'">

                            <div :class="chat.sender === 'user' ?
                                'bg-blue-600 text-white rounded-l-2xl rounded-tr-2xl' :
                                'bg-white border border-slate-200 text-slate-700 rounded-r-2xl rounded-tl-2xl'"
                                class="px-4 py-3 text-sm shadow-sm max-w-[85%] relative">

                                <div x-html="chat.text" class="leading-relaxed"></div>

                                <span class="text-[9px] opacity-60 block mt-1 text-right" x-text="chat.time || ''"></span>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="p-4 border-t border-slate-100 bg-white">
                    <div class="text-[10px] text-slate-400 mb-2 italic">
                        Konteks Terakhir: <span class="text-slate-700 font-medium"
                            x-text="viewLeadData.topic_context"></span>
                    </div>
                    <button @click="showViewLead = false"
                        class="w-full py-2.5 bg-slate-800 hover:bg-slate-900 text-white rounded-xl text-sm font-bold transition">Tutup
                        Detail</button>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        function confirmDelete(id, type) {
            const message = type === 'knowledge' ?
                "Data pengetahuan chatbot ini akan dihapus permanen." :
                "Data lead dan riwayat chat ini akan dihapus permanen.";

            Swal.fire({
                title: 'Hapus Data?',
                text: message,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e11d48',
                cancelButtonColor: '#64748b',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'rounded-3xl'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-' + type + '-' + id).submit();
                }
            })
        }
    </script>
@endpush
