<li class="nav-item">
    <a href="{{ route('barangs.index') }}"
       class="nav-link {{ Request::is('barangs*') ? 'active' : '' }}">
        <p>Barangs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dokumenProposals.index') }}"
       class="nav-link {{ Request::is('dokumenProposals*') ? 'active' : '' }}">
        <p>Dokumen  Proposals</p>
    </a>
</li>


