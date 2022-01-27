{extends "base.tpl"}
{block "main"}
    <h1>Kontakt</h1>
    <hr class="mt-2 mb-4">
    <form method="post" action="#">
        <div class="mb-3">
            <label class="form-label">E-Mail</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Betreff</label>
            <input type="text" class="form-control" name="subject" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nachricht</label>
            <textarea class="form-control" rows="6" name="message" required></textarea>
        </div>
        <div class="mb-3 form-check">
            <label class="form-check-label">Ich habe die Datenschutzbestimmungen gelesen</label>
            <input type="checkbox" class="form-check-input" required>
        </div>
        <button type="submit" class="btn btn-primary">Absenden</button>
    </form>
    {if $form}
        <div class="alert alert-success mt-4" role="alert">
            <p>
                Deine Nachricht wurde erfolgreich gesendet!
            </p>
            <p class="mb-0"><strong>E-Mail:</strong>{$form["email"]|escape}</p>
            <p class="mb-0"><strong>Betreff:</strong> {$form["subject"]|escape}</p>
            <p class="mb-0"><strong>Nachricht:</strong> {$form["message"]|escape}</p>
        </div>
    {/if}
{/block}