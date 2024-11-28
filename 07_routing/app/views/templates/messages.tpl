{if $msgs->isError()}
  <p class="emoji">&#128531</p>
  <h4>Wystąpiły błędy:</h4>
  <ol class="err">
    {foreach $msgs->getErrors() as $err}
      {strip}
        <li>{$err}</li>
      {/strip}
    {/foreach}
  </ol>
{/if}